<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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
    return view('index');
});


Route::get('/multiform',[FrontendController::class,'multiform']);
Route::get('/about_us',[FrontendController::class,'about_us']);
Route::get('/faq',[FrontendController::class,'faq']);
Route::get('/contact_us',[FrontendController::class,'contact_us']);

Route::get('/after_process',[FrontendController::class,'after_process']);

Route::post('store_quotes',[\App\Http\Controllers\QuotesController::class,'store_quotes'])->name('store.quotes');

