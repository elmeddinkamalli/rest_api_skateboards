<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Skateboard_color;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'amount',
        'custom_print_photo',
        'phone',
        'email',
        'adress'
    ];
    public $timestamps = true;

    public function product(){
        return $this->hasOne('\App\Models\Skateboard', 'id', 'product_id');
    }

    public function color(){
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
}
