<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistributorController extends Controller
{
    public function home(){
        return view('distributor.home');
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
    public function data(){
        $distributor_id = Auth::user()->distributor->id;
        $distributor = Distributor::findOrFail($distributor_id);
        return view('distributor.addData',compact('distributor'));
    }
    
}
