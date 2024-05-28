<?php

use App\Http\Controllers\AdminController;
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

Route::get('/dashboard/users', [UserController::class, 'index'])->name('dashboard.user.index');
Route::get('/dashboard/users/edit/{user}', [UserController::class, 'edit'])->name('dashboard.user.edit');
Route::put('/dashboard/users/update/{user}', [UserController::class, 'update'])->name('dashboard.user.update');
Route::delete('/dashboard/users/delete/{user}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');

Route::get('/dashboard/cars', [CarController::class, 'index'])->name('dashboard.cars.index');
Route::get('/dashboard/cars/create', [CarController::class, 'create'])->name('dashboard.cars.create');
Route::get('/dashboard/cars/edit/{car}', [CarController::class, 'edit'])->name('dashboard.cars.edit');
Route::put('/dashboard/cars/update/{car}', [CarController::class, 'update'])->name('dashboard.cars.update');
Route::delete('/dashboard/cars/delete/{car}', [CarController::class, 'destroy'])->name('dashboard.cars.destroy');

Route::get('/dashboard/rentals', [RentalController::class, 'index'])->name('dashboard.rentals.index');
Route::get('/dashboard/rentals/edit/{rental}', [RentalController::class, 'edit'])->name('dashboard.rentals.edit');
Route::put('/dashboard/rentals/update/{rental}', [RentalController::class, 'update'])->name('dashboard.rentals.update');
Route::delete('/dashboard/rentals/delete/{rental}', [RentalController::class, 'destroy'])->name('dashboard.rentals.destroy');



Route::get('/cars/car/{car}', [CarController::class, 'carDetails'])->name('cars.details');
Route::resource('/cars', CarController::class);
Route::resource('/rentalCars', RentalController::class);

