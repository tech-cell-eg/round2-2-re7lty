<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.master');
})->name('admin.dashboard');


////Testimonials->middleware(['auth'])
Route::prefix('admin')->group(function () {
    Route::resource('testimonials', TestimonialController::class)->names('admin.testimonials');
});
