<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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


Route::get('/', [FrontController::class, 'index'])->name('homePage');

Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/Services', [FrontController::class, 'Services'])->name('Services');
Route::get('/Projects', [FrontController::class, 'Projects'])->name('Projects');
Route::get('/Pages', [FrontController::class, 'Pages'])->name('Pages');
Route::get('/Contact', [FrontController::class, 'Contact'])->name('Contact');
Route::get('/Pricing', [FrontController::class, 'Pricing'])->name('page.Pricing');

Route::post('/sendEmail', [FrontController::class, 'sendEmail'])->name('sendEmail');

Route::get('/blogs', [FrontController::class, 'blogs'])->name('page.blogs');
Route::get('/members', [FrontController::class, 'members'])->name('page.members');
Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('page.testimonials');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
