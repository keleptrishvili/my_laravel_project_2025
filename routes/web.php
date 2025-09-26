<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
route::view('/home', '/home',['name'=>"GAU", 'lastname'=>"GAUDZE"]);

Route::get('/test1', function () {
    return "hello";
});
route::redirect('/test1', '/test2');

Route::get('/user/{id?}', function (string $id = "0") {
    return 'User '.$id;
});