<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';

    public function types()
    {
        return $this->hasMany('App\Addition');
    }
}
