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
Route::get('/coba', function () {
    return view('layouts.template4');
});
Route::get('/jadwal', function () {
    return view('petani.jadwal');
});



Auth::routes();

Route::middleware('auth')->group(function(){
    Route::middleware('role:Admin')->prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/pupuk', [AdminController::class, 'pupuk'])->name('admin.pupuk');
        Route::post('/addPupuk', [AdminController::class, 'addPupuk'])->name('admin.addPupuk');
    });
    Route::middleware('role:Distributor')->prefix('distributor')->group(function(){
        Route::get('/home', [DistributorController::class, 'home'])->name('distributor.home');
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
        Route::patch('/pembayaran/{id}/update',[PetaniControlle::class, 'pembayaran'])->name('petani.pembayaran');
       
    });
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::patch('/profile/update', [ProfileController::class, 'updateprofile'])->name('profile.update');
Route::post('/profile/changePass', [ProfileController::class, 'changePassword'])->name('profile.changePass');
});