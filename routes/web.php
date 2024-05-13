<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/trang-chu',[HomeController::class,'index']);
Route::get('/san-pham',[ProductController::class,'index']);//tat ca san pham
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail']);//chi tiet san pham
Route::get('/lien-he',[ContactController::class,'index']);//lien he


