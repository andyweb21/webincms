<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings', [DashboardController::class, 'setting'])->name('settings');

    Route::post('/settings', [DashboardController::class, 'update_setting']);

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::controller(PostController::class)->group(function () {
        Route::get('/post', 'index')->name('post');
        Route::get('/post/add', 'create')->name('post.add');
        Route::post('/post/add', 'store')->name('post.store');
        Route::get('/post/edit/{post}', 'edit')->name('post.edit');
        Route::post('/post/edit', 'update')->name('post.update');
        Route::delete('/post/delete', 'delete')->name('post.delete');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('categories');
        Route::post('/category/add', 'ajaxstore')->name('category.ajax');
    });

    Route::get('/page', [PageController::class, 'index'])->name('page');

    Route::get('/comments', [CommentController::class, 'index'])->name('comments');

    Route::get('/media', [MediaController::class, 'index'])->name('media');

    Route::get('/menu', [MenuController::class, 'index'])->name('menu');

    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

});
