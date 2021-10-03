<?php

use Illuminate\Foundation\Application;
use App\Http\Controllers\RspvController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\HomeController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::fallback(function () {
        return redirect('/home');
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/rsvp', [RspvController::class, 'index'])->name('rsvp');
    Route::post('/rsvp', [RspvController::class, 'store'])->name('rsvp.store');

    Route::get('/venue', function () {
        return Inertia::render('Venue');
    })->name('venue');

    Route::get('/accommodation', function () {
        return Inertia::render('Accommodation');
    })->name('accommodation');

    Route::get('/on-the-day', function () {
        return Inertia::render('OnTheDay');
    })->name('on-the-day');

    Route::get('/seating-plan', function () {
        return Inertia::render('SeatingPlan');
    })->name('seating-plan');

    Route::get('/food-and-drinks', function () {
        return Inertia::render('FoodAndDrinks');
    })->name('food-and-drinks');

    Route::get('/band', function () {
        return Inertia::render('Band');
    })->name('band');

    Route::post('/food-and-drinks', function () {
        return 'Food and drink stored!';
    })->name('food-and-drinks-store');

    Route::get('/upload-your-photos', function () {
        return Inertia::render('UploadYourPhotos');
    })->name('upload-your-photos');

    Route::middleware('can:admin')->group(function() {
        Route::get('/admin', function() {
            return Inertia::render('Admin/Home');
        })->name('admin');
    });
});
