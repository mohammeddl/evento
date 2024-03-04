<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
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



Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
    Route::patch('/events/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/event/{id}/modify', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event', [OrganizerController::class, 'store'])->name('event.store');
    Route::post('/reserver', [ReservationController::class, 'store'])->name('reserver');
});

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');



require __DIR__ . '/auth.php';
