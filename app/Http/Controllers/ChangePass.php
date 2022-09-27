<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use app\Models\User; 
use Illuminate\Support\Facades\Hash; 

class ChangePass extends Controller
{
    public Function ChangePass(){

        return view('admin.body.change_password');
        
            }
            public Function UpPass(Request $request){

                $validateData = $request->validate([
                    'current_password' => 'required',
                    'password' => 'required|confirmed'
                ]);
        
                $hashedPassword = Auth::user()->password;
        
                if(Hash::check($request->current_password,$hashedPassword)){
        
                    $user=User::find(Auth::id());
                    $user->password = Hash::make($request->password);
                    $user->save();
                    Auth::logout();
                    return redirect()->route('login')->with('success', 'Password is Changed Successfully');
                    
                    }else
                    {
                    return redirect()->back()->with('error', 'Current Password is Invalid');
                    }
        
         }
}
