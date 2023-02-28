<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('home');
    
});
Route::view('/barang','barang');
Route::view('/kategori','kategori');
Route::view('/pivot','pivot');

Route::get('/category/index',[CategoriesController::class,'index'])->name('index');
Route::get('/category/create',[CategoriesController::class,'create'])->name('create');
Route::post('/category/store',[CategoriesController::class,'store']);
Route::get('/post/index',[PostsController::class,'index'])->name('index');
Route::get('/post/create',[PostsController::class,'create']);
Route::post('/post/store',[PostsController::class,'store']);
Route::get('/post/edit/{id}',[PostsController::class,'edit']);
Route::post('/post/update/{id}',[PostsController::class,'update/']);

