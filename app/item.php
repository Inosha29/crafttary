<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
     'name', 'category', 'unit_price', 'available_quantity', 'restock_level', 'details'
     ];
}
