<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
     protected $table = 'wishlists';
     protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->hasMany(WishListItem::class,'wishlist_id');
    }



    
}
