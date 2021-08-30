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

    Route::get('/rsvp', function () {
        return (Inertia::render('Rsvp'));
    })->name('rsvp');

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

    Route::get('/food-and-drinks', function () {
        return (Inertia::render('FoodAndDrinks'));
    })->name('food-and-drinks');

    Route::get('/food-and-drinks/create', function () {
        return (Inertia::render('FoodAndDrinksForm'));
    })->name('food-and-drinks-create');

    Route::post('/food-and-drinks', function () {
        return 'Food and drink stored!';
    })->name('food-and-drinks-store');

    Route::get('/upload-your-photos', function () {
        return (Inertia::render('UploadYourPhotos'));
    })->name('upload-your-photos');
});
