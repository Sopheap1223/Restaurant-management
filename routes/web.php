<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\foodController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get ('/', function(){
    return view('login');
})->name('login');
Route::get ('/login',[AuthManager::class , 'login'] )
    ->name('login');
Route::post ('/login',[AuthManager::class , 'loginPost'] )
->name('login.post');
Route::get ('/register',[AuthManager::class , 'register'] )
->name('register');
Route::post ('/register',[AuthManager::class , 'registerPost'] )
    ->name('register.post');

Route::get ('/welcome', function(){
    return view('welcome');
})->name('welcome');

Route::get ('/menu', function(){
    return view('menu');
})->name('menu');
Route::get ('/category', function(){
    return view('category');
})->name('category');
Route::get('/menu',[foodController::class,'index']);
Route::get('/AddFood',[FoodController::class ,'AddFood']);
Route::post('/saveFood',[FoodController::class ,'saveFood'])->name("saveFood");
Route::get('EditFood/{id}',[FoodController::class ,'EditFood']);
Route::get('deleteFood/{id}',[FoodController::class ,'deleteFood']);
Route::post('updateFood',[FoodController::class ,'updateFood']);
Route::get('/AdminPage',[FoodController::class ,'AdminPage'])->middleware('is_admin');
Route::prefix('/')->middleware('auth')->group(function (){
    Route::get('/Adminpage',[AuthManager::class , 'login']);
});
