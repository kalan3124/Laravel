<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopPost extends Model
{
    protected $table = 'shop_wise_sale';
    protected $primaryKey = 'shop_post_id';

    public function Users(){
        return $this->belongsTo(User::class,'shop_post_id','id');
    }
}
