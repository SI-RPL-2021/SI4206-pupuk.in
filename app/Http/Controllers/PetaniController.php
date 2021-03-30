<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Petani;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaniController extends Controller
{
    public function home(){
        return view('petani.home');
    }
    public function data(){
        $petani_id = Auth::user()->petani->id;
        $petani = Petani::findOrFail($petani_id);
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
}

