<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curdops;

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


Route::post("update",[curdops::class,'update']);
Route::get('index',[curdops::class,'lists']);
Route::get('delete/{id}',[curdops::class,'delete']);
Route::get('edit/{id}',[curdops::class,'edit'])->name('edit');