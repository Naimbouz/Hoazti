<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;





Route::resource('products', ProductController::class);
Route::resource('produits', ProduitController::class);
Route::resource('contacts', ContactController::class);
Route::resource('logins', loginController::class);
Route::resource('registerrs', RegisterrController::class);
Route::resource('services', ServiceController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




//tari9et jwt
Route::post('login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);
Route::group(['middleware'=>'api'],function(){
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    //  Route::get('me', [AuthController::class,'me']);
    Route::post('me', [AuthController::class,'me']);
});