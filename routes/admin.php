<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\TestimonialController;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('homePage');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/editProfile', [AdminController::class, 'editProfile'])->name('editProfile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::put('/', [AdminController::class, 'update_settings'])->name('update_settings');

    Route::put('/checkPassword', [AdminController::class, 'checkPassword'])->name('checkPassword');

    Route::resource('blogs', BlogController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('members', MemberController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('pricingPlan', PricingPlanController::class);
    Route::resource('pages', PageController::class);
});
