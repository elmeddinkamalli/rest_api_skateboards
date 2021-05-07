<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Skateboard;
use Illuminate\Http\Request;
use App\Rules\CheckForOrderDate;
use App\Http\Requests\OrderValidation;

class MainController extends Controller
{
    public function get_products(){
        $skateboards = Skateboard::with('type', 'colors')->paginate(15);
        return $skateboards;
    }

    public function get_orders(){
        $orders = Order::with('product', 'color')->orderBy('created_at', 'DESC')->paginate(15);
        $orders->collect()->transform(function($order){
            unset($order->product_id);
            unset($order->color_id);
            return $order;
        });
        return $orders;
    }

    public function make_order(OrderValidation $request){
        if($request->file('custom_print_photo')){
            $image = $request->file('custom_print_photo');
            $fileName = time().'.'.$request->custom_print_photo->extension();
            $request->custom_print_photo->move(public_path('/img/'), $fileName);
            $request = new Request($request->all());
            $request->merge([
                'custom_print_photo' => '/img/'.$fileName
            ]);
        };
        return Order::create($request->all());
    }

    public function prepare_order(Request $request){
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'delivery_date' => 'required|date|after:preparation_date',
            'preparation_date' => [
                'required',
                'date',
                new CheckForOrderDate($request)
            ],
        ]);

        return Order::where('id', $request->order_id)->update($request->only(['delivery_date', 'preparation_date']));
    }
}
