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

Route::get('/test', function () {
    // $brands = \DB::table('brands')->get();
    // foreach($brands as $brand){
    //     dump($brand);
    // }

    // $brand = \DB::table('brands')->where('id', '=', 1)->first();
    // $brand = \DB::table('brands')->where('id', 1)->first();
    // $brand = \DB::table('brands')->find(1);
    // dump($brand);

    // $names = \DB::table('users')->pluck('name');
    // foreach($names as $name){
    //     dump($name);
    // }

    // $names = \DB::table('users')->pluck('id', 'name');
    // foreach($names as $name => $id){
    //     dump($id, $name);
    // }
    $brand = \DB::table('brands')->latest()->first();
    dump($brand);
    $brand = \DB::table('brands')->oldest()->first();
    dump($brand);

});

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about-us');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');

Route::name('admin.')->group(
    function() {
        Route::get('/admin', 'App\Http\Controllers\Admin\DashboardController')->name('dashboard');

        Route::resource('brands', 'App\Http\Controllers\Admin\BrandController');
        Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');
    }
);

