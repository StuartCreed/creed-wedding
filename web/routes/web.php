<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::fallback(function () {
        return (Inertia::render('Home'));
    })->name('home');

    Route::get('/venue', function () {
        return (Inertia::render('Venue'));
    })->name('venue');

    Route::get('/accommodation', function () {
        return Inertia::render('Accommodation');
    })->name('accommodation');

    Route::get('/on-the-day', function () {
        return (Inertia::render('OnTheDay'));
    })->name('on-the-day');

    Route::get('/seating-plan', function () {
        return (Inertia::render('SeatingPlan'));
    })->name('seating-plan');

    Route::get('/food', function () {
        return (Inertia::render('Food'));
    })->name('food');

    Route::get('/drinks', function () {
        return (Inertia::render('Drinks'));
    })->name('drinks');

    Route::get('/upload-your-photos', function () {
        return (Inertia::render('UploadYourPhotos'));
    })->name('upload-your-photos');
});
