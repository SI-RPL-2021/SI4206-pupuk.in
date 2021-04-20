<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Pupuk;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $distributors = Distributor::all();
        return view('admin.dashboard',compact('distributors'));
    }
    public function pupuk(){
        return view ('admin.addPupuk');
    }
    public function addPupuk(Request $request){
        $pupuk = Pupuk::insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kuota_per_10m2' => $request->kuota_per_10m2,
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
