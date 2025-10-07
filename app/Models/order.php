<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $gaurded = [];
   public function items(){
        return $this->hasMany(OrderItems::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
