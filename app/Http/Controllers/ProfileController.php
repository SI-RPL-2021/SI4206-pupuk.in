<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        $user = User::find(Auth::user()->id);
        return view('profile',compact('user'));
    }

    public function updateprofile(Request $request){
        if($request->photo == null){
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }else{
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img/photo'),$file);

            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'photo' => $file,
            ]);
        }
        
    return redirect('/profile');  
    }

    
}