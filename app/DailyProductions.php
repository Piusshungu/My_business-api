<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyProductions extends Model
{
    protected $fillable = ['production_category', 'production_category', 'product_name', 'number_of_products', 'production_date'];
}
