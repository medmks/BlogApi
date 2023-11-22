<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeconnexeionController extends Controller
{
    //
    public function show(){
        return view("auth.logout");
        }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
        }
}
