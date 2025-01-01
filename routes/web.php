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

Route::get('/consultation.create', function () {
    return view('consultation.create');
});

Route::get('/consultation.show', function () {
    return view('consultation.show');
});

Route::get('/consultation.edit', function () {
    return view('consultation.edit');
});

Route::get('/jadwal.create', function () {
    return view('jadwal.create');
});

Route::get('/jadwal.show', function () {
    return view('jadwal.show');
});

Route::get('/jadwal.edit', function () {
    return view('jadwal.edit');
});

Route::get('/pasien.create', function () {
    return view('pasien.create');
});

Route::get('/pasien.show', function () {
    return view('pasien.show');
});

Route::get('/pasien.edit', function () {
    return view('pasien.edit');
});

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::resource('pasien', PasienController::class);

Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');

Route::put('/pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');
