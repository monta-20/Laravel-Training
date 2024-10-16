<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

use App\Http\Controllers\POSTDATAController;
//return view pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});

//strings
Route::get('/string',function(){
    return "this is string";
});
//array
Route::get('/array',function(){
    return array(1,45,34);
});
//JSON
Route::get('/json',function(){
    return response()->json([
        "name"=>"Montassar",
        "lastname"=>"Ben Brahim",
        "age"=>23

    ]);
});
//Redirect
Route::get('/redirect',function(){
    return redirect('/json');
});
//Using Controllers
//Solution1:
Route::get('/students',[MyController::class,"Print_msg"]);
//solution2 :
Route::get('/students','App\Http\Controllers\MyController@Print_msg');//include not necessary

//Passing Data
Route::get('/Data','App\Http\Controllers\PassDataController@PassData');
//Blade Template
Route::get('/template',function(){
    return view('UseTemplateEngine');
});

//POST METHOD 
Route::get('/register',function(){
    return view ('register');
});
Route::post('/register',[POSTDATAController::class,"sendData"]);