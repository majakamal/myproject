<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beverage extends Model
{
    //
    protected $casts=[
        'toppings' => 'array'
    ];
}
