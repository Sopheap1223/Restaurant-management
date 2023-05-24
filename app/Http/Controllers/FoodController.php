<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(){
        $data = food::get();
        //return $data;
        return view('menu',compact('data'));
        return view('Adminpage',compact('data'));
    }
    public function AddFood(){
        return view('AddFood');
    }
    public function saveFood(Request $request ){
//        dd($request);
//        $request -> validate([
//            'name' => 'required',
//            'price' => 'required',
//            'food_image'=>'required',
//            'type_of_food'=>'required'
//        ]);

//        $food = Food::all();
//        dd($request);
        $food = [];
        $food ['name'] =$request->name;
        $food['type_of_food'] =$request->type_of_food;
        $food['food_image'] =$request->food_image;
        $food['food_image'] ='fvgbhnjm';
        $food['price'] =$request->price;
        $food['price'] =5;
//        dd($food);
        $food_data=Food::create($food);


        if (!$food_data){
            return redirect(route('Addfood'))->with("error" , "Register Unsuccessfully.Try again!");
        }
        return redirect()->back()->with("success" , "add Item Successfully");
    }
}
