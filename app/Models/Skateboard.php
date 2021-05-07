<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Skateboard_color;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skateboard extends Model
{
    use HasFactory;

    public function type(){
        return $this->hasOne('\App\Models\Type', 'id', 'type');
    }

    public function colors(){
        return $this->belongsToMany(Color::class, Skateboard_color::class);
    }
}
