<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Resources\Products as ProductsResources;
use App\Http\Resources\ProductsCollection;

class ProductsController extends Controller
{
    public function index(){
        return new ProductsCollections(Products::all());
    }
}
