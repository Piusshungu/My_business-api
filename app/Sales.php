<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = ['product_name', 'number_of_product', 'product_category', 'total_amount', 'date_of_sales'];
}
