<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name_of_product', 'category', 'country', 'number_of_products'];

    public static function GetProductsItems(){
        $productsItems = DB::table('products')->orderBy('id', 'asc')->get();
        return $productsItems;
    }
}
