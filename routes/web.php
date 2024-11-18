<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductColorController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/welcom', function () {
    return view('Client.index');
});
Route::get('/', function () {
    return view('Layouts.AdminApp');
});
Route::get('/Admin/Categoris/Index',[CategoryController::class,'index']);

Route::get('/create',[CategoryController::class,'create']);
Route::post('/store',[CategoryController::class,'store']);
Route::get('/admin/{category}/edit/{id}',[CategoryController::class,'edit']);
Route::put('/admin/{category}/edit/{id}',[CategoryController::class,'update']);

//Brand Route
Route::get('/brandindex',[BrandController::class,'index']);
//Route::get('/brandcreate',[BrandController::class,'create']);
Route::post('/brandcreate',[BrandController::class,'store']);
Route::get('/viewbranddata',[BrandController::class,'allbrands']);
Route::get('/admin/api/brand/{id}',[BrandController::class,'fetchdata']);
Route::post('/api/brand/update/{id}',[BrandController::class,'updatedata']); 

//Product Color Route

Route::get('/product/color/index',[ProductColorController::class,'index']);

//Product Route
Route::get('productindex',[ProductController::class,'index']);
Route::get('productcreate',[ProductController::class,'create']);
Route::post('productstore',[ProductController::class,'store']);
Route::post('productstore',[ProductController::class,'store']);///


///Client

