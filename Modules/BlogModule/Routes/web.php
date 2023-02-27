<?php
use Modules\BlogModule\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

Route::prefix('blogmodule')->group(function() {
    Route::get('/', 'BlogController@getAllBlogs');
});

Route::prefix('admin')->middleware(['auth'])->group(function() {
    //Route::get('/', [BlogController::class,'getAllBlogs']);
    Route::get('/', [UserController::class,'getAllBlogs']);
    Route::get('/button_delete/{id}',[BlogController::class,'deleteBlog']);
    Route::post('/button_update/{id}',[BlogController::class,'updateBlog']);
    Route::get('/button_edit/{id}',[BlogController::class,'editBlog']);
    Route::get('/button_create', [BlogController::class,'createBlog']);
    Route::post('/button_store', [BlogController::class,'storeBlog']);
    
    
});













