<?php

namespace App\Rules;

use App\Models\Order;
use Illuminate\Contracts\Validation\Rule;

class CheckForOrderDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $order = Order::where('id', $this->request->order_id)->first();
        if($value < $order->created_at){
            return false;
        };
        return true;
    }


    public function message()
    {
        return "Preparation date must be after order date";
    }
}
