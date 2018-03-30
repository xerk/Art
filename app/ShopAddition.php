<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ShopAddition extends Model
{
    protected $table = 'shop_additions';

    protected $fillable = ['shop_id', 'accessory_id'];
}
