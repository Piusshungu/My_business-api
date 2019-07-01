<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name_of_product', 'category', 'country', 'number_of_products'];
}
