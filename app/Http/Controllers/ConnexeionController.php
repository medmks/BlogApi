<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexeionController extends Controller
{
    public function show(){
        return view("auth.login");
        }
        public function login(Request $request){
            if(Auth::attempt(["email"=>$request->email, "password"=>$request->password, ])){
            $request->session()->regenerate();
            $name=Auth()->User()->name;
            return redirect()->intended()->with($name); 
            }
            return back()->withErrors(['email' => 'Adresse email invalide!','password'=>'password incorrecte'])->onlyInput('email','password');
            }
    //
}
 