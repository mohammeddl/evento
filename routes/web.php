<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
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

Route::get('/dashboard',[OrganizerController::class,'index'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::delete('/admin/user/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
Route::put('/admin/event', [AdminController::class, 'modify'])->name('event.accepation');
Route::get('/admin/category', [AdminController::class, 'category'])->name('category');
Route::post('/category',[CategoryController::class,'store'])->name('catagory.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
    Route::patch('/event/{id}/modify', [EventController::class, 'update'])->name('event.update');
    Route::get('/events/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event', [OrganizerController::class, 'store'])->name('event.store');
    Route::post('/reserver', [ReservationController::class, 'store'])->name('reserver');
});

Route::post('/search', [EventController::class, 'search'])->name('search');
Route::post('/filter', [CategoryController::class, 'filter'])->name('filter');

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');



require __DIR__ . '/auth.php';
