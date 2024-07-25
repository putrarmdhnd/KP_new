<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

    //DATA USER
    Route::get('admin/kelola-akun', [App\Http\Controllers\AdminController::class, 'KelolaAkun'])->name('admin.kelola-akun');
    // TAMBAH DATA USER
    Route::get('admin/tambah-akun', [App\Http\Controllers\AdminController::class, 'TambahAkun'])->name('admin.tambah-akun');
    Route::get('admin/tambah-akun-user', [App\Http\Controllers\AdminController::class, 'TambahAkunUser'])->name('admin.tambah-akun-user');
    Route::post('admin/submit-akun', [App\Http\Controllers\AdminController::class, 'SubmitAkun'])->name('admin.submit-akun');
    //EDIT DATA USER
    Route::get('admin/{id}/edit-akun', [App\Http\Controllers\AdminController::class, 'EditAkun'])->name('admin.edit-akun');
    Route::patch('admin/update-akun', [App\Http\Controllers\AdminController::class, 'UpdateAkun'])->name('admin.update-akun');
    //HAPUS DATA USER
    Route::delete('admin/akun-delete/{id}', [App\Http\Controllers\AdminController::class, 'DeleteAkun'])->name('admin.user.delete');

    // Konfirmasi APL1
    Route::get('admin/konfirmasi-apl1', [App\Http\Controllers\AdminController::class, 'Konfirmasi_APL1'])->name('admin.konfirmasi_apl1');
    //Edit Apl-1 Siswa
    Route::get('admin/{nik}/edit-apl1-siswa', [App\Http\Controllers\AdminController::class, 'Edit_APL1_Siswa'])->name('admin.edit_apl1_siswa');
    //Update Apl-1 Siswa
    Route::patch('admin/update-apl1-siswa', [App\Http\Controllers\AdminController::class, 'Update_APL1_Siswa'])->name('admin.update-apl1');

    //PDF Apl-1
    Route::get('admin/{nik}/pdf-apl1', [App\Http\Controllers\AdminController::class, 'PDF_APL1'])->name('admin.pdf_apl1');
    Route::get('admin/{nik}/pdf-apl2', [App\Http\Controllers\AdminController::class, 'PDF_APL2'])->name('admin.pdf_apl2');
    Route::get('admin/{id}/pdf-penilaian', [App\Http\Controllers\AdminController::class, 'PDF_Penilaian'])->name('admin.pdf_penilaian');
    
    //Laporan
    Route::get('admin/laporan', [App\Http\Controllers\AdminController::class, 'Laporan'])->name('admin.laporan');
    //Laporan LPk-1
    Route::get('admin/laporan/lpk1', [App\Http\Controllers\AdminController::class, 'LaporanAPl1'])->name('admin.laporan-apl1');
    //Laporan LPK-2
    Route::get('admin/laporan/lpk2', [App\Http\Controllers\AdminController::class, 'LaporanAPl2'])->name('admin.laporan-apl2');
    //Laporan Penialaian
    Route::get('admin/laporan/penilaian', [App\Http\Controllers\AdminController::class, 'LaporanPenilaian'])->name('admin.laporan-penilaian');

});

Route::middleware(['auth', 'assesor'])->group(function () {

    Route::get('assesor/home', [App\Http\Controllers\AssesorController::class, 'index'])->name('assesor.home');

    // Data list siswa
    Route::get('assesor/{id}/konfirmasi-apl2-list-siswa', [App\Http\Controllers\AssesorController::class, 'KonfirmasiAPL2'])->name('admin.konfirmasi_apl2_listsiswa');
    //Edit data siswa
    Route::get('assesor/{id}/konfirmasi-apl2-siswa', [App\Http\Controllers\AssesorController::class, 'KonfirmasiAPL2_Edit'])->name('admin.konfirmasi_apl2_siswa');
    Route::patch('assesor/konfirmasi-apl2-store', [App\Http\Controllers\AssesorController::class, 'KonfirmasiAPL2_Store'])->name('admin.konfirmasi_apl2');

    Route::get('assesor/{idAssessor}/list-siswa', [App\Http\Controllers\AssesorController::class, 'listSiswaPenilaian'])->name('assesor.listSiswa');
    Route::get('assesor/{nik}/penilaian', [App\Http\Controllers\AssesorController::class, 'detailPenilaian'])->name('assesor.penilaian');
    Route::post('assesor/submitPenilaian', [App\Http\Controllers\AssesorController::class, 'submitPenilaian'])->name('assesor.Submitpenilaian');

});

Route::middleware(['auth', 'siswa'])->group(function () {

    Route::get('siswa/home', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.home');

    //APL-1
    Route::get('siswa/{id}/apl-1', [App\Http\Controllers\SiswaController::class, 'APL1'])->name('siswa.apl1');
    //TAMBAH-APL1
    Route::post('siswa/submit-apl-1', [App\Http\Controllers\SiswaController::class, 'SubmitApl_1'])->name('siswa.submit-apl-1');


     //APL-2
     Route::get('siswa/{id}/apl-2', [App\Http\Controllers\SiswaController::class, 'APL2'])->name('siswa.apl2');
     //TAMBAH-APL2
     Route::post('siswa/submit-apl-2', [App\Http\Controllers\SiswaController::class, 'SubmitApl_2'])->name('siswa.submit-apl-2');

});

