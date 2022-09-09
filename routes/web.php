<?php

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
});

Route::get('/hello', function () {
    // $hello = "<h1>Hello World</h1>";
    $name = "Php World";
    // // dd($_SERVER);
    // return $hello;
    // return view('hello', ['name' => $name]);
    // return view('hello', compact('name'));
    return view('hello')->with('name', $name);
});
