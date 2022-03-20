<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WelcomeController::class,'index']);

//Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/single-blog-post',[BlogController::class,'show'])->name('blogs.show');
