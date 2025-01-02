<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation.index');
Route::get('/consultation/create', [ConsultationController::class, 'create'])->name('consultation.create');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/consultation/{id}', [ConsultationController::class, 'show'])->name('consultation.show');
Route::get('/consultation/{id}/edit', [ConsultationController::class, 'edit'])->name('consultation.edit');
Route::put('/consultation/{id}', [ConsultationController::class, 'update'])->name('consultation.update');
Route::delete('/consultation/{id}', [ConsultationController::class, 'destroy'])->name('consultation.destroy');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');
Route::get('/jadwal/show/{id}', [JadwalController::class, 'show'])->name('jadwal.show');
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}', [PasienController::class, 'show'])->name('pasien.show');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');

// Routes for Payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

// Authentication Routes
Auth::routes();
Route::post('/login', [LoginController::class, 'authenticate']);
