<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class, 'index'])->name('dashboard');

Route::get('/search',[ProductController::class, 'search'])->name('search');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/product/add',[ProductController::class, 'add']);
    Route::post('/product/create',[ProductController::class, 'create']);
    
    Route::get('/product/{product}', [ProductController::class, 'edit']);
    Route::post('/product/{product}', [ProductController::class, 'update']);
});