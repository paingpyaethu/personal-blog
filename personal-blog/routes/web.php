<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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

// Admin View
Route::get('/dashboard',[AdminDashboardController::class,'dashboard'])->middleware(['auth']);

Route::resource('categories',CategoryController::class);

// Front View
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');



//Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blogs/single-blog-post',[BlogController::class,'show'])->name('blogs.show');

//Route::get('/admin/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';
