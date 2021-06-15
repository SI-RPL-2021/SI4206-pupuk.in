<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProfileController;
use App\Models\Distributor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::middleware('role:Admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard','chart'])->name('admin.dashboard');
        // petani
        Route::get('/petani', [AdminController::class, 'petani'])->name('admin.petani');
        Route::patch('/petani/{id}/ban', [AdminController::class, 'banPetani'])->name('admin.BanPetani');
        Route::patch('/petani/{id}/aktif', [AdminController::class, 'aktifPetani'])->name('admin.AktifPetani');
        // distributor
        Route::get('/distributor', [AdminController::class, 'distributor'])->name('admin.distributor');
        Route::patch('/distributor/{id}/ban', [AdminController::class, 'banDistributor'])->name('admin.BanDistributor');
        Route::patch('/distributor/{id}/aktif', [AdminController::class, 'aktifDistributor'])->name('admin.AktifDistributor');
        // pupuk
        Route::get('/pupuk', [AdminController::class, 'pupuk'])->name('admin.pupuk');
        Route::post('/addPupuk', [AdminController::class, 'addPupuk'])->name('admin.addPupuk');
    });
    Route::middleware('role:Distributor')->prefix('distributor')->group(function(){
        Route::get('/home', [DistributorController::class, 'home'])->name('distributor.home');
        // petani
        Route::get('/petani', [DistributorController::class, 'petani'])->name('distributor.petani');
        Route::get('/petani/{id}', [DistributorController::class, 'cari'])->name('distributor.CariPetani');
        Route::patch('/petani/{id}/edit', [DistributorController::class, 'edit_petani'])->name('distributor.EditPetani');
        Route::patch('/petani/{id}/ban', [DistributorController::class, 'ban'])->name('distributor.BanPetani');
        Route::patch('/petani/{id}/aktif', [DistributorController::class, 'aktif'])->name('distributor.AktifPetani');
        // Pengambilan
        Route::get('/pengambilan', [DistributorController::class, 'pengambilan'])->name('distributor.pengambilan');
        // Lokasi
        Route::get('/Data', [DistributorController::class, 'data'])->name('distributor.data');
        Route::post('/addData', [DistributorController::class, 'addData'])->name('distributor.addData');
        Route::get('/formlokasi', [DistributorController::class, 'dataLokasi'])->name('distributor.dataLokasi');
        Route::post('/lokasiPengambilan', [DistributorController::class, 'lokasi'])->name('distributor.lokasi');
    });
    Route::middleware('role:Petani')->prefix('petani')->group(function(){
        Route::get('/home', [PetaniController::class, 'home'])->name('petani.home');
        Route::get('/data', [PetaniController::class, 'data'])->name('petani.data');
        Route::get('/pengambilan',[PetaniController::class, 'ambil'])->name('petani.ambil'); 
        Route::post('/addPetani', [PetaniController::class, 'addPetani'])->name('petani.addPetani');
        Route::get('/formPengambilan/{id}',[PetaniController::class, 'form'])->name('petani.Formambil'); 
        Route::post('/tambahPengambilan', [PetaniController::class, 'pengambilan'])->name('petani.pengambilan');
        Route::get('/cart',[PetaniController::class, 'cart'])->name('petani.cart');
        Route::get('/bayarPupuk/{id}',[PetaniController::class, 'bayar'])->name('petani.bayar');
        Route::patch('/pembayaran/{id}/update',[PetaniController::class, 'pembayaran'])->name('petani.pembayaran');
       
    });
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::patch('/profile/update', [ProfileController::class, 'updateprofile'])->name('profile.update');
Route::post('/profile/changePass', [ProfileController::class, 'changePassword'])->name('profile.changePass');
});