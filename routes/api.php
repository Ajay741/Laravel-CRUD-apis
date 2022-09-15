<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//api starts from here

//Route::get("data",[dummyAPI::class,'getData']); //simple to see the data

//Created api for get
// Route::get("list/{key:name?}",[DeviceController::class,'listname']);  
//Route::get("list/{id?}",[DeviceController::class,'list']);  

//creted route for post

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::post("add",[DeviceController::class,'add']);  

    Route::put("update",[DeviceController::class,'update']); 

    Route::delete("delete/{id}",[DeviceController::class,'delete']); 

    Route::get("search/{name}",[DeviceController::class,'search']); 

    Route::post("validate",[DeviceController::class,'testdata']);  

    Route::apiResource("member",MemberController::class);

    });


Route::post("login",[UserController::class,'index']);  