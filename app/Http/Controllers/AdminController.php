<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function pupuk(){
        return view ('admin.addPupuk');
    }
    public function addPupuk(Request $request){
        $pupuk = Pupuk::insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kuota_per_10m2' => $request->kuota_per_10m2,
        ]);

        if($pupuk){
            Toastr::success('Pupuk berhasil diinput', 'Sukses!');
        }else{
            Toastr::error('Pupuk gagal diinput', 'Gagal!');
        }
        return redirect()->route('admin.pupuk');
    }
}
