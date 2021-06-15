<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Pembayaran;
use App\Models\Petani;
use App\Models\Pupuk;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard(){
        $distributor = Distributor::count();
        $petani = Petani::count();
        $pupuks = Pupuk::all();
        $pengambilan =Pembayaran::where('status','Lunas')->sum('jumlah_pengambilan');
        $pembayaran =Pembayaran::where('status','Lunas')->sum('jumlah_pembayaran');
        $year = ['2019','2020','2021','2022'];
        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }
        return view('admin.dashboard',compact('distributor','petani','pupuks','pengambilan','pembayaran'),['year'=>$year,'user'=>$user]);
    }
    // petani
    public function petani(){
        $petanis = Petani::all();
        return view('admin.petani', compact('petanis'));
    }
    public function banPetani($id){
        $petani = Petani::where('id',$id)->update([
            'status'=> 'Non aktif',
        ]);
        if($petani){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.petani');
    }
    public function aktifPetani($id){
        $petani = Petani::where('id',$id)->update([
            'status'=> 'aktif',
        ]);
        if($petani){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.petani');
    }
    // distributor
    public function distributor(){
        $distributors = Distributor::all();
        return view('admin.distributor',compact('distributors'));
    }
    public function banDistributor($id){
        $distributor = Distributor::where('id',$id)->update([
            'status'=> 'Non aktif',
        ]);
        if($distributor){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.distributor');
    }
    public function aktifDisributor($id){
        $distributor = Distributor::where('id',$id)->update([
            'status'=> 'aktif',
        ]);
        if($distributor){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.distributor');
    }
    // pupuk
    public function pupuk(){
        return view ('admin.addPupuk');
    }
    public function addPupuk(Request $request){
        $file = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img/photo'),$file);
        $pupuk = Pupuk::insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kuota_per_10m2' => $request->kuota_per_10m2,
            'batas_pengambilan'=>$request->date,
            'gambar' => $file,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($pupuk){
            Toastr::success('Pupuk berhasil diinput', 'Sukses!');
        }else{
            Toastr::error('Pupuk gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.pupuk');
    }
}