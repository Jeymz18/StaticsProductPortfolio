<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Home / Index
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

// About
Route::get('/about', function () {
    return view('portfolio.about');
})->name('portfolio.about');

// Projects (optional, if you use it)
Route::get('/projects', function () {
    return view('portfolio.projects');
})->name('portfolio.projects');

// Testimonials
Route::get('/testimonials', function () {
    return view('portfolio.testimonials');
})->name('portfolio.testimonials');

// Contact
Route::get('/contact', function () {
    return view('portfolio.contact');
})->name('portfolio.contact');
