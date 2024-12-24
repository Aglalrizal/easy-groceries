<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user'; // Default role sebagai 'user'
        $user->save();

        return response()->json(['message' => 'User registered successfully.'], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Redirect URL berdasarkan peran pengguna
            $redirectUrl = $this->getRedirectUrlBasedOnRole($user->role);
            return redirect($redirectUrl);
        } else {
            return redirect(route('login'))->with('error', 'Login gagal');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login.index'));
    }

    public function getRedirectUrlBasedOnRole($role)
    {
        switch ($role) {
            case 'admin':
                return url('/admin/home');
            case 'vendor':
                return url('/vendor/home');
            case 'user':
            default:
                return url('/user/home');
        }
    }
    public function home(){
        if(Auth::check()){
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect(route(name: 'admin.home'));
                case 'vendor':
                    return redirect(route(name: 'vendor.home'));
                case 'user':
                    return redirect(route(name: 'user.home'));
            }
        }
        else return redirect('/login');
    }
}
