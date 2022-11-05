<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('index',[PageController::class, 'getIndex']);

Route::get('/type/{id}',[PageController::class, 'getLoaiSp']);


Route::get('/detail/{id}',[PageController::class, 'getChitiet']);
Route::get('lien-he', [PageController::class, 'getLienhe']);
Route::get('gioi-thieu',[PageController::class, 'getAbout']);

Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);