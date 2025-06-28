<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Home page
Route::get('/', function () {
    return view('home');
});

// Consoles page
Route::get('/consoles', function () {
    return view('consoles');
});

// Games page
Route::get('/games', function () {
    return view('games');
});

// Pricing page
Route::get('/pricing', function () {
    return view('pricing');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Console Rental Routes (protected with auth)
Route::get('/rent/{console_type}', [RentalController::class, 'rentConsole'])->middleware('auth');
Route::get('/package/{package_type}', [RentalController::class, 'rentPackage'])->middleware('auth');

// Protected rental routes
Route::resource('consoles', ConsoleController::class)->only(['show', 'create', 'store', 'edit', 'update', 'destroy'])->middleware('auth');
Route::get('/consoles', [ConsoleController::class, 'index'])->name('consoles.index');

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index')->middleware('auth');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create')->middleware('auth');
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store')->middleware('auth');
Route::get('/rentals/{rental}', [RentalController::class, 'show'])->name('rentals.show')->middleware('auth');
Route::patch('/rentals/{rental}/status', [RentalController::class, 'updateStatus'])->name('rentals.update-status')->middleware('auth');
