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
}
