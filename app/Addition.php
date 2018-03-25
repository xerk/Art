<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Addition extends Model
{
    protected $table = 'additions';

    protected $fillable = ['order_id', 'type_id'];
}
