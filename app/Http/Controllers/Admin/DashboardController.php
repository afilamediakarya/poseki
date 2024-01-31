<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view("pages.admin.dashboard");
    }

    public function LoginAdmin_proses(Request $request)
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
                dd($credentials);
                return redirect()->route('admin');
            } elseif (Auth::user()->roles == 'user') {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
}
