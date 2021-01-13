<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AdminController;

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/products', [FrontController::class, 'products'])->name('products');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/projects', [FrontController::class, 'projects'])->name('projects');
Route::get('/blogs', [FrontController::class, 'blogs'])->name('blogs');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/quotation', [FrontController::class, 'quotation'])->name('quotations');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('about', AboutController::class);
Route::resource('blog', BlogController::class);
Route::resource('faq', FaqController::class);
Route::resource('project', ProjectController::class);
Route::resource('product', ProductController::class);
Route::resource('service', ServiceController::class);
Route::resource('slider', SliderController::class);
Route::resource('team', TeamController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('order', OrderController::class);
Route::resource('quotations', QuotationController::class);
Route::resource('message', MessageController::class);
Route::resource('brand', BrandController::class);

Route::resource('admin', AdminController::class);

