<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/Services', [FrontController::class, 'Services'])->name('Services');
Route::get('/Projects', [FrontController::class, 'Projects'])->name('Projects');
Route::get('/Pages', [FrontController::class, 'Pages'])->name('Pages');
Route::get('/Contact', [FrontController::class, 'Contact'])->name('Contact');

Route::get('/Blog', [FrontController::class, 'Blog'])->name('Blog');


