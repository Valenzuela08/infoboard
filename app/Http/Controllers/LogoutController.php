<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

class LogoutController extends Controller
{
    
    public function Logout(){
        Auth::logout();
        return redirect()->route('home')->with('success', 'User Logout');
        
        }
}
