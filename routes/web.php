<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/service-detail/{slug}', [PageController::class, 'serviceDetail'])->name('serviceDetail');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('/blog-detail/{slug}', [PageController::class, 'blogDetail'])->name('blogDetail');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/store-contact-enquiry', [PageController::class, 'storeEnquiry'])->name('storeEnquiry');
