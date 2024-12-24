<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', 'email:dns', 'max: 255', 'unique:users'],
            'name' => ['required', 'max: 255'],
            'password' => ['required', 'confirmed', 'min:8'],
            'address' => 'required',
        ]);
        //dd($validatedData);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silahkan masuk!');
    }
}
