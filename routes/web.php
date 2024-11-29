<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/home',  [AdminHomeController::class, 'index'])->name('home');
    Route::resource('destinations', AdminDestinationController::class);
    Route::resource('blogs', AdminBlogController::class);
});

Route::post('/destinations/load-more', [AdminDestinationController::class, 'loadMoreDestinations'])->name('destinations.loadMore');
Route::post('/blogs/load-more', [AdminBlogController::class, 'loadMoreBlogs'])->name('blogs.loadMore');


Auth::routes();
