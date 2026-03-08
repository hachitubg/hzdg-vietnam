<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Giới thiệu
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');

// Năng lực
Route::get('/ho-so-nang-luc', [HomeController::class, 'capability'])->name('capability');

// Hệ thống âm thanh
Route::get('/gioi-thieu-he-thong-am-thanh', [HomeController::class, 'audioSystem'])->name('audio-system');

// Sản phẩm
Route::get('/san-pham', [ProductController::class, 'index'])->name('products.index');
Route::get('/danh-muc/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('/san-pham/{slug}', [ProductController::class, 'show'])->name('products.show');

// Dự án
Route::get('/du-an', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/du-an/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// Bài viết
Route::get('/tin-tuc', [PostController::class, 'index'])->name('posts.index');
Route::get('/tin-tuc/{slug}', [PostController::class, 'show'])->name('posts.show');

// Liên hệ
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact.index');
Route::post('/lien-he', [ContactController::class, 'store'])->name('contact.store');

// Gửi yêu cầu mua hàng (form trên trang sản phẩm)
Route::post('/yeu-cau-mua', [ContactController::class, 'purchase'])->name('contact.purchase');

// Alias tương thích URL cũ cho trang sản phẩm
Route::get('/coda-cue-four', fn () => redirect()->route('products.show', 'coda-cue-four'))->name('pages.coda-cue-four');