<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displayItems = Products::all();
        return $displayItems;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $save_product = new Products([
            'name_of_product' => $request->get('name_of_product'),
            'category' => $request->get('category'),
            'country' => $request->get('country'),
            'number_of_products' => $request->get('number_of_products')
        ]);
        $save_product->save();
        return response()->json([
            "message" => 'Product is successfully added',
            "status_code" => '200'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save_product = new Products([
            'name_of_product' => $request->get('name_of_product'),
            'category' => $request->get('category'),
            'country' => $request->get('country'),
            'number_of_products' => $request->get('number_of_products')
        ]);
        $save_product->save();
        return response()->json([
            "message" => 'Product is successfully added',
            "status_code" => '200'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $update_products = Products::find($id);

          $update_products->update($request->all());

         return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_products = Products::find($id);

        $delete_products->delete();

       return response()->json('successfully deleted');
    }
}
