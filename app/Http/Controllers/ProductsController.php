<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Resources\Products as ProductsResources;
use App\Http\Resources\ProductsCollection;

class ProductsController extends Controller
{
    public function index(){
        return new ProductsCollection(Products::all());
    }
    public function AddProducts(Request $request){
        $product = new Data();
        $product->name_of_product = $request->name_of_product;
        $product->category = $request->category;
        $product->country = $request->country;
        $product->number_of_products = $request->number_of_products;
        $product->save();
        return $product;

    }
}
