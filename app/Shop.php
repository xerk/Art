<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
    protected $table = 'shops';

    public function accessory()
    {
        return $this->hasMany('App\ShopAddition');
    }

    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }
}
