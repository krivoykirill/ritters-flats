<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/ru', function () {
    return view('ruindex');
});
Route::get('/', function () {
    return view('lvindex');
});
Route::post('apply-form', [HomeController::class, 'applyForm']);
Route::get('lvsuccess',function () {
    return view('lvsuccess');
});
Route::get('rusuccess',function () {
    return view('rusuccess');
});