<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Pembayaran;
use App\Models\Petani;
use App\Models\Pupuk;
use App\Models\TempatPengambilan;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaniController extends Controller
{
    public function home(){
        $petani = Petani::where('user_id',Auth::user()->id)->first();
        return view('petani.home',compact('petani'));
    }
    public function ambil(){
        $pupuks = Pupuk::all();
        $petani = Petani::where('user_id',Auth::user()->id)->first();
        $pembayarans = Pembayaran::all();
        return view('petani.pengambilan',compact('pupuks','petani','pembayarans'));
    }
    public function data(){
        $petani_id = Auth::user()->petani->id ?? 0;
        if($petani_id){
            $petani = Petani::findOrFail($petani_id);
        }else{
            $petani = null ;
        }
        $distributors = Distributor::all();
        return view('petani.addData', compact('distributors', 'petani'));
    }
    public function addPetani(Request $request){
        $pupuk = Petani::updateOrCreate([
                'user_id'=> Auth::user()->id
            ],
            [
            'alamat' => $request->alamat,
            'no_telp' => $request->no_hp,
            'luas_tanah' => $request->luas_tanah,
            'distributor_id'=> $request ->distributor_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($pupuk){
            Toastr::success('data berhasil diinput', 'Sukses!');
        }else{
            Toastr::error('data gagal diinput', 'Gagal!');
        }
        return redirect()->route('petani.data');
    }

    public function form($id){
        $pupuk = Pupuk::find($id);
        $lokasis = TempatPengambilan::where('distributor_id',Auth::user()->petani->distributor_id)->get();
        return view('petani.Formambil', compact('pupuk','lokasis'));
    }

    public function pengambilan(Request $request){
        $pengambilan = Pembayaran::insert([
            'petani_id' => Auth::user()->petani->id,
            'distributor_id'=> Auth::user()->petani->distributor_id,
            'pupuk_id' => $request ->nama,
            'jumlah_pengambilan' => $request ->jumlah,
            'tempat_pengambilan_id' => $request ->tempat,
            'jumlah_pembayaran' =>  (($request ->jumlah)*(Pupuk::find($request ->nama)->harga)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if($pengambilan){
            Toastr::success('Pemesanan berhasil ', 'Sukses!');
        }else{
            Toastr::error('Pemesanan gagal ', 'Gagal!');
        }
        return redirect()->route('petani.cart');
    }
    public function cart(){
        $carts = Pembayaran::where('petani_id', Auth::user()->petani->id)->get();
        return view ('petani.cart', compact('carts'));
    }
    public function bayar($id){
        $bayar = Pembayaran::find($id);
        return view('petani.pembayaran',compact('bayar'));
    }
    public function pembayaran($id, Request $request){
        $pembayaran = Pembayaran::where('id',$id)->update([
            'status'=> 'Lunas',
            'metode'=> $request->metode,
        ]);
        if($pembayaran){
            Toastr::success('Pembayaran berhasil ', 'Sukses!');
        }else{
            Toastr::error('Pembayaran gagal ', 'Gagal!');
        }
        return redirect()->route('petani.cart');
    }
}  