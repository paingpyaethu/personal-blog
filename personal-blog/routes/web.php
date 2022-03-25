<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EduExpController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeDislikeController;
use App\Http\Controllers\PostController;
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

/*|----- Admin View -----|*/

Route::group(['prefix'=>'admin', 'middleware'=>['auth','isAdmin']], function (){
   Route::get('/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');

   /*|----- User -----|*/
   Route::get('/users',[UserController::class, 'index'])->name('users.index');
   Route::get('/users/{id}/edit',[UserController::class, 'edit'])->name('users.edit');
   Route::post('/users/{id}/update',[UserController::class, 'update'])->name('users.update');
   Route::get('/users/{id}/delete',[UserController::class, 'destroy'])->name('users.destroy');

   /*|----- Post -----|*/
   Route::resource('posts',PostController::class);

   /*|----- About -----|*/
   Route::resource('abouts',AboutController::class);

   /*|----- Skill -----|*/
   Route::resource('skills',SkillController::class);

   /*|----- Edu-Exp -----|*/
   Route::resource('edu-exps',EduExpController::class);

   /*|----- Category -----|*/
   Route::resource('categories',CategoryController::class);

});



// Front View
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');
Route::get('/about',[WelcomeController::class,'about'])->name('welcome.about');
Route::get('/blogs/{id}/single-blog-post',[WelcomeController::class,'show'])->name('welcome.show');

Route::post('/post/{postId}/like',[LikeDislikeController::class,'like'])->name('post.like');
Route::post('/post/{postId}/dislike',[LikeDislikeController::class,'dislike'])->name('post.dislike');




//Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
//Route::get('/blogs/single-blog-post',[BlogController::class,'show'])->name('blogs.show');

//Route::get('/admin/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';
