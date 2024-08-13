<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TambahtransaksiController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaketController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tambahtransaksi', [TambahtransaksiController::class, 'showtransaksi'])->name('show.transaksi');
Route::post('/tambahtransaksi', [TambahtransaksiController::class, 'tambahtransaksi'])->name('tambah.transaksi');
Route::get('/daftarpaket', [PaketController::class, 'showdaftarpaket'])->name('show.daftarpaket');
Route::get('/manajementransaksi', [TambahtransaksiController::class, 'showmanajementransaksiuser'])->name('show.manajementransaksiuser');
Route::get('/pembayaran/{id}', [UserController::class, 'showpembayaran'])->name('show.pembayaran');
Route::get('/pembayarandana/{id}', [UserController::class, 'showpembayarandana'])->name('show.pembayarandana');
Route::put('/tambahpembayaran/{id}', [UserController::class, 'tambahpembayaran'])->name('tambah.pembayaran');
Route::get('/pembayarantransfer/{id}', [UserController::class, 'showpembayarantransfer'])->name('show.pembayarantransfer');
Route::get('/pembayarancod/{id}', [UserController::class, 'showpembayarancod'])->name('show.pembayarancod');
Route::delete('/manajementransaksi/{id}', [TambahtransaksiController::class, 'destroy'])->name('show.manajementransaksidestroy');
Route::put('/manajementransaksi', [TambahtransaksiController::class, 'update'])->name('update.showmanajementransaksi');




});

require __DIR__.'/auth.php';


//ADMIN

Route::get('/admin/dashboard', function () {
    return view('admin.admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/daftarpaket', [PaketController::class, 'showdaftarpaketadmin'])->name('show.daftarpaketadmin');
    Route::get('/admin/editpaket/{id}', [PaketController::class, 'showeditpaket'])->name('show.editpaket');
    Route::put('/admin/editpaket/{id}', [PaketController::class, 'update'])->name('update.editpaket');
    Route::put('/admin/editpaket/{id}/edit', [PaketController::class, 'edit'])->name('edit.editpaket');
    Route::put('admin/daftarpaket', [PaketController::class, 'update'])->name('update.daftarpaketadmin');
    Route::get('/admin/manajementransaksi', [TambahtransaksiController::class, 'showmanajementransaksi'])->name('show.manajementransaksi');
Route::get('/admin/transaksimasuk', [VerifikasiController::class, 'showverifikasi'])->name('show.verifikasi');
Route::put('/admin/transaksimasuk/{id}', [VerifikasiController::class, 'update'])->name('update.verifikasi');
Route::get('/admin/transaksimasuk/{id}/edit', [VerifikasiController::class, 'edit'])->name('edit.verifikasi');
});

require __DIR__.'/adminauth.php';


