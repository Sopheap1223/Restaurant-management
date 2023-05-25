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
        $food['food_image'] =$request->image;
        $food['price'] =$request->price;
//        dd($food);
        $food_data=Food::create($food);


        if (!$food_data){
            return redirect(route('Addfood'))->with("error" , "Register Unsuccessfully.Try again!");
        }
        return redirect()->back()->with("success" , "add Item Successfully");
    }
    public function AdminPage(){
        $data = food::get();
        return view('AdminPage',compact('data'));
    }
    public function EditFood($id){
        $data = food::where('id','=',$id) -> first();
        return view('EditFood',compact('data'));
    }
    public function updateFood(Request $request){
        $id = $request->id;
        $name =$request->name;
        $price = $request ->price;
        $food_image =$request->image;
        $type_of_food=$request->type_of_food;
        Food::where('id','=',$id)->update([
           'name'=>$name,
            'price'=>$price,
            'food_image'=>$food_image,
            'type_of_food'=>$type_of_food
        ]);
        return redirect()->back()->with("success" , "Food update Successfully");
    }
    public function deleteFood($id){
        Food::where('id','=',$id)->delete();
        return redirect()->back()->with("success" , "Food Delete Successfully");
    }
}
