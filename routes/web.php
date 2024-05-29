<?php

use App\Http\Controllers\AdminCarsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRentalsController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () { return view('pages.home'); })->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('login.logout')->middleware('auth');

Route::get('/signup', [RegisterController::class, 'index'])->name('signup')->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::resource('/dashboard/users', AdminUserController::class);
Route::resource('/dashboard/rentals', AdminRentalsController::class);

Route::get('/cars/list', [CarController::class, 'carsList'])->name('cars.list');

Route::get('/cars/car/{car}', [CarController::class, 'carDetails'])->name('cars.details');
Route::resource('/cars', CarController::class);
Route::resource('/rentalCars', RentalController::class);

