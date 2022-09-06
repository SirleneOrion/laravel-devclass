<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\DataBase\QueryException;


Route::get('/', 'HomeController@index');
Route::get('/user/create', 'UserController@create');  
Route::post('/user/store', 'UserController@store');

//Route::get('/', [HomeController::class,'index']);
//Route::get('/user/create', [UserController::class, 'create']);  Estava assim
//Route::post('/user/store', [UserController::class, 'store']);

//Route::post('/produto/store',[ProdutoController::class, 'store']);


