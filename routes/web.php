<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SocialteController;
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


Route::get('/home', [RoleController::class, 'index']);
Route::get('/', [UserController::class, 'index'])->name('index');


Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::delete('/admin/user/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
    Route::put('/admin/event', [AdminController::class, 'modify'])->name('event.accepation');
    Route::get('/admin/category', [AdminController::class, 'category'])->name('category');
    Route::post('/category', [CategoryController::class, 'store'])->name('catagory.store');
    Route::put('/category/update', [CategoryController::class, 'update'])->name('catagory.update');
    Route::put('/admin/limite', [OrganizerController::class, 'limite'])->name('organizer.limite');
    Route::delete('/category', [CategoryController::class, 'destroy'])->name('catagory.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/reserver', [ReservationController::class, 'store'])->name('reserver');
});

Route::middleware('organizer')->group(function () {
    Route::get('/dashboard', [OrganizerController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
    Route::patch('/event/{id}/modify', [EventController::class, 'update'])->name('event.update');
    Route::patch('/event/reservation', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/events/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event', [OrganizerController::class, 'store'])->name('event.store');
    Route::delete('/event', [OrganizerController::class, 'destroy'])->name('event.destroy');
});

Route::post('/search', [EventController::class, 'search'])->name('search');
Route::post('/filter', [CategoryController::class, 'filter'])->name('filter');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

Route::get('/auth/google', [SocialteController::class, 'redirectToGoogle'])->name('google');
Route::get('/auth/google/callback', [SocialteController::class, 'handleGoogleCallback'])->name('google.test');

Route::get('/ticket', function () {
    return view('components.ticket');
});
require __DIR__ . '/auth.php';
