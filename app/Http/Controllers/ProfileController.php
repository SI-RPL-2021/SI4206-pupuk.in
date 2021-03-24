<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editprofile(){
        $user = User::find(Auth::user()->id);
        return view('Member.profile',compact('user'));
    }
    public function updateprofile(Request $request){
        User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/profile');  
    }
}
