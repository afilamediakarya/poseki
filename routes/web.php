<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ReferensiController as AdminReferensiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Users\AkunController;
use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\FaqController;
use App\Http\Controllers\Users\LayananController;
use App\Http\Controllers\Users\PengangkutanController;
use App\Http\Controllers\Users\PermohonanController;
use App\Http\Controllers\Users\ReferensiController;
use App\Http\Controllers\Users\RiwayatController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('login.post');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/Referensi', [AdminReferensiController::class, 'index'])->name('admin.referensi')->middleware('isLogin:admin');
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin')->middleware('isLogin:admin');
    Route::post('/admin', [AdminDashboardController::class, 'LoginAdmin_proses'])->name('admin.proses');
});

Route::get('/logout', [SessionController::class, 'actionlogout'])->name('actionlogout');
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register', [SessionController::class, 'register_proses'])->name('register.post');
Route::get('/referensiPohon', [AdminReferensiController::class, 'index'])->name('referensiAdmin')->middleware('isLogin:user');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('isLogin:user');
Route::post('dashboard/store', [DashboardController::class, 'store'])->name('posts.store')->middleware('isLogin:user');
Route::get('/riwayatPermohonan', [RiwayatController::class, 'index'])->name('riwayat')->middleware('isLogin:user');
Route::get('/buatPermohonan', [PermohonanController::class, 'index'])->name('buatPermohonan')->middleware('isLogin:user');
Route::get('/pengangkutanSampah', [PengangkutanController::class, 'index'])->name('pengangkutanSampah')->middleware('isLogin:user');
Route::get('/faq', [FaqController::class, 'index'])->name('faq')->middleware('isLogin:user');
Route::get('/referensiPohon', [ReferensiController::class, 'index'])->name('referensiPohon')->middleware('isLogin:user');
Route::get('/akun', [AkunController::class, 'index'])->name('akun')->middleware('isLogin:user');
