<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{ protected $fillable = [
    'id','discount', 'subtotal','total'
];
    //
}
