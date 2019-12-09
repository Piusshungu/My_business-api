<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //Index method for Manager
    public function Index(){
        return new ProductsCollection(Products::all());
    }
}
