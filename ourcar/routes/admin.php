<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('categories', CategoryController::class)->names('admin.categories');