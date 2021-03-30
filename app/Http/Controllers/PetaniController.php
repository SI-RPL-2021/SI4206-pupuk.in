<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function home(){
        return view('petani.home');
    }
    public function data(){
        return view('petani.addData');
    }
}

