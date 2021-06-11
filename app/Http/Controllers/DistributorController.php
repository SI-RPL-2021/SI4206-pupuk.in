<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Petani;
use App\Models\Pupuk;
use App\Models\TempatPengambilan;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistributorController extends Controller
{
    public function home(){
        $petanis = Petani::all();
        $pupuks = Pupuk::all();
        $distributor = Distributor::where('user_id',Auth::user()->id)->first();
        return view('distributor.home',compact('petanis','pupuks','distributor'));
    }
    public function petani(){
        $petanis = Petani::all()->where('distributor_id',Auth::user()->distributor->id);
        $distributor = Distributor::where('user_id',Auth::user()->id)->first();
        return view('distributor.petani',compact('petanis','distributor'));
    }
    public function cari($id){
        $cari = Petani::find($id);
        return view('distributor.petani',compact('cari'));
    }
    public function edit_petani($id, Request $request){
        $petani = Petani::where('id',$id)->update([
            'luas_tanah'=> $request->luas_tanah,
        ]);
        if($petani){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('distributor.petani');
    }
    public function ban($id){
        $petani = Petani::where('id',$id)->update([
            'status'=> 'Non aktif',
        ]);
        if($petani){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('distributor.petani');
    }
    public function aktif($id){
        $petani = Petani::where('id',$id)->update([
            'status'=> 'aktif',
        ]);
        if($petani){
            Toastr::success('Data berhasil diupdate', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('distributor.petani');
    }
    public function data(){
        $distributor_id = Auth::user()->distributor->id ?? 0;
        if($distributor_id){
            $distributor = Distributor::findOrFail($distributor_id);
        }else{
            $distributor = null ;
        }
        return view('distributor.addData',compact('distributor'));
    }
    public function addData(Request $request){
        $distributor = Distributor::updateOrCreate([
            'user_id'=> Auth::user()->id
        ],
            [
            'alamat' => $request->alamat,
            'no_telp' => $request->no_hp,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($distributor){
            Toastr::success('Data berhasil diinput', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('distributor.data');
    }

    public function dataLokasi(){
        return view('distributor.tempatPengambilan');
    }

    public function lokasi(Request $request){
        $lokasi= TempatPengambilan::insert([
            'distributor_id' => Auth::user()->distributor->id,
            'nama_tempat' => $request -> nama,
            'alamat' => $request -> alamat,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($lokasi){
            Toastr::success('Data berhasil diinput', 'Sukses!');
        }else{
            Toastr::error('Data gagal diinput', 'Gagal!');
        }
        return redirect()->route('distributor.dataLokasi');
    }
    
}