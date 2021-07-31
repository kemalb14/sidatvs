<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KppController;
use App\Http\Controllers\BpnController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ajax/petugas/kpp', [AdminController::class, 'findPetugasKpp'])->name('ajax.request.petugas.kpp');
Route::get('/ajax/petugas/bpn', [AdminController::class, 'findPetugasBpn'])->name('ajax.request.petugas.bpn');
Route::get('/ajax/request/kpp/sket', [KppController::class, 'findsket'])->name('ajax.request.sket');
Route::get('/ajax/request/bpn/sket', [BpnController::class, 'findsket'])->name('ajax.request.sket');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('loginpage');
    Route::post('/do/login', [AuthController::class, 'doLogin'])->name('do.login');
});

Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('home.admin');
    
    Route::get('/bpn', [AdminController::class, 'listbpn'])->name('list.bpn');
    Route::post('/post/petugas/bpn', [AdminController::class, 'postPetugasBpn'])->name('post.petugas.bpn');
    Route::post('/post/ubah/petugas/bpn', [AdminController::class, 'ubahPetugasBpn'])->name('post.ubah.petugas.bpn');
    Route::post('/post/ubah/password/bpn', [AdminController::class, 'ubahPasswordBpn'])->name('post.ubah.pass.bpn');
    Route::get('/hapus/petugas/bpn', [AdminController::class, 'hapusPetugasBpn'])->name('hapus.petugas.bpn');

    Route::get('/kpp', [AdminController::class, 'listkpp'])->name('list.kpp');
    Route::post('/post/petugas/kpp', [AdminController::class, 'postPetugasKpp'])->name('post.petugas.kpp');
    Route::post('/post/ubah/petugas/kpp', [AdminController::class, 'ubahPetugasKpp'])->name('post.ubah.petugas.kpp');
    Route::post('/post/ubah/password/kpp', [AdminController::class, 'ubahPasswordKpp'])->name('post.ubah.pass.kpp');
    Route::get('/hapus/petugas/kpp', [AdminController::class, 'hapusPetugasKpp'])->name('hapus.petugas.kpp');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.admin');
});

Route::group(['middleware' => 'auth:kpp', 'prefix' => 'kpp'], function () {
    Route::get('/dashboard', [KppController::class, 'index'])->name('home.kpp');
    Route::get('/form/sket', [KppController::class, 'formsket'])->name('input.sket.kpp');
    Route::get('/batal/sket', [KppController::class, 'batalsket'])->name('batal.sket');
    Route::get('/post/batal/sket/{id}', [KppController::class, 'postbatalsket'])->name('do.batal.sket');
    Route::post('/post/sket', [KppController::class, 'postsket'])->name('post.sket');
    Route::post('/impport/excel', [KppController::class, 'importexcel'])->name('import.excel');
    Route::get('/download/template', [KppController::class, 'download'])->name('download.template');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.kpp');
});

Route::group(['middleware' => 'auth:bpn', 'prefix' => 'bpn'], function(){
    Route::get('/dashboard', [BpnController::class, 'index'])->name('home.bpn');
    Route::get('/gunakan/sket', [BpnController::class, 'formsket'])->name('gunakan.sket');
    // Route::get('/post/gunakan/sket/{id}', [BpnController::class, 'gunakansket'])->name('do.gunakan.sket');
    Route::post('/post/sertifikat', [BpnController::class, 'postsertifikat'])->name('post.sertifikat');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.bpn');
});