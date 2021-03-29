<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
    return redirect()->route('profile');;  
    }
    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
        ]);
        if ($request->new_password != $request->password_confirmation) {
            // Toastr::error('', 'Konfirmasi password baru tidak sama!');
            return redirect()->route('profile');
        }

        $user = Auth::user();

        if (Hash::check($request->old_password, $user->password)) {
            User::find($user->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
        } else {
            // Toastr::error('', 'Password Lama salah!');
            return redirect()->route('profile');
        }

        // Toastr::success('Password changed successfully', 'Success!');
        return redirect()->route('profile');
    }
    
}