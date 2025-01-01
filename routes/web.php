<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PaymentController;

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

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
