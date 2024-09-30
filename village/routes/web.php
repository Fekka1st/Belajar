<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\domisili;
use App\Http\Controllers\pengajuansuratcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

  Route::get('/admin/dashboard', [dashboardcontroller::class, 'dashboardoperator']);
  Route::get('/warga/dashboard', [dashboardcontroller::class, 'dashboardwarga']);
  Route::get('/warga/Pengajuan_surat_jenis', [dashboardcontroller::class, 'pengajuan_surat']);

  Route::get('/warga/Pengajuan_surat_domisili', [domisili::class, 'index']);
  Route::post('/warga/Pengajuan_surat_domisili/simpan', [domisili::class, 'store'])->name('domisili.store');
  Route::get('/warga/Pengajuan_surat_domisili/print/{id}',[domisili::class, 'print']);
  Route::delete('/warga/Pengajuan_surat_domisili/hapus/{id}',[domisili::class, 'destroy']);

  Route::get('/kelola_kategori/hide/data', [pengajuansuratcontroller::class, 'data'])->name('kategori.data');
  Route::resource('/kelola_kategori', pengajuansuratcontroller::class);
  Route::post('/kelola_kategori/store', [pengajuansuratcontroller::class, 'store'])->name('kategori.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
