<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function UserRegistration(Request $request){
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'location' => 'required'
        );
        $first_name = User::all()->where('first_name', Input::get('first_name'))->firts();
        $last_name = User::all()->where('last_name', Input::get('last_name'))->first();
        $phone_number = User::all()->where('phone_number', Input::get('phone_number'))-first();
        $email = User::all()->where('email', Input::get('email'))-first();
        $location = User::all()->where('location', Input::get('location'))-first();

        if(!empty(email)){
            return Response::json(Input::get('email').'is already taken');
        }
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            echo ('Failed');
        }
        else{
            $credentials = array(
                "first_name" =>$request->input("first_name"),
                "last_name" =>$request->input("last_name"),
                "phone_number" =>$request->input("phone_number"),
                "email" =>$request->input("email"),
                "location" =>$request->input("location")
            );
            DB::table('users')->insert($credentials);
            return new ProductsCollection(Products::all());
        }


    }
}
