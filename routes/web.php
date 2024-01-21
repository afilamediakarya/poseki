<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ReferensiController as AdminReferensiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/riwayatPermohonan', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/buatPermohonan', [PermohonanController::class, 'index'])->name('buatPermohonan');
Route::get('/pengangkutanSampah', [PengangkutanController::class, 'index'])->name('pengangkutanSampah');
Route::get('/layananMasyarakat', [LayananController::class, 'index'])->name('layananMasyarakat');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/referensiPohon', [ReferensiController::class, 'index'])->name('referensiPohon');
Route::get('/akun', [AkunController::class, 'index'])->name('akun');
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('admin/referensiPohon', [AdminReferensiController::class, 'index'])->name('referensiAdmin');


Route::get('admin/referensiPohon', function () {
    return view('pages.admin.referensiPohon');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.registrasi');
});

