<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishListItem extends Model
{
     protected $fillable = [
        'wishlist_id',
        'product_id',
        'quantity',
        
    ];
   public function product(){
        return $this->belongsTo(Product::class);
    }

    public function WishList(){
        return $this->belongsTo(WishList::class);
    }
}
