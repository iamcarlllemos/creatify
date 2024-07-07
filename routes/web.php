<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('portfolio/about', [PortfolioController::class, 'about'])->name('portfolio.about');
    Route::get('portfolio/skills', [PortfolioController::class, 'skills'])->name('portfolio.skills');
});