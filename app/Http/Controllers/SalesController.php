<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;

class SalesController extends Controller
{
    public function index(){
    return new SalesCollection(Sales::all());
    }
}
