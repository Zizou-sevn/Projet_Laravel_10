<?php

use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'home'])->name('main.home');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/apropos', [MainController::class, 'apropos'])->name('main.apropos');

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');

Route::post('/reservation', [MainController::class, 'reservationStore'])->name('main.reservation.store');

Route::get('/admin/reservation', [AdminReservationController::class, 'index'])->name('admin.reservation.index');

Route::get('/admin/reservation/{id}', [AdminReservationController::class, 'show'])->name('admin.reservation.show');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->name('admin.reservation.edit');

Route::put('/admin/reservation/{id}/', [AdminReservationController::class, 'update'])->name('admin.reservation.update');

// Route::get('/admin-reservation/', [MainController::class,'adminReservationIndex'])->middleware('auth')->name('main.adminReservation.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
