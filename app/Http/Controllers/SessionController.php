<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Auth::Attempt($credentials)) {
            if (Auth::user()->roles == 'admin') {
                return redirect()->route('admin');
            } elseif (Auth::user()->roles == 'user') {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function register(){
        return view('pages.registrasi');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'namaLengkap'      => 'required',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|min:8',
            'repeatPassword' => 'required|same:password'
        ]);

        $data = [
            'namaLengkap' => $request->input('namaLengkap'),
            'email'       => $request->input('email'),
            'password'    => Hash::make($request->input('password')),
        ];
        User::create($data);

        return redirect()->route('login');;
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda Berhasil Logout');
    }
}
