<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/page2/{name}',function($name){
   echo '<h1>Bienvenue'.$name.'</h1>';
})->name("page2");

Route::get('/page3', function(){
   return redirect('/'); //redirect()->route('welcome')
});

Route::get('/page2/{name?}',function($name=null){
   return '<h1>Welcome'.$name.'</h1>';
})->where('name','[A-Za-z]');

Route::get('/page4/{id}', function($id){
   return "l'id est".$id;
})->where('id','[0-9]+');
Route::get('/test',[TestController::class,'index']);

Route::get('/contact',[TestController::class,'contact']);
