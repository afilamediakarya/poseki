<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.users.index');
    }

    // public function create()
    // {
    //     return view('pages.users.create');
    // }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'gambar' => 'required|image|mimes:jpeg,jpg,png|max:1024',
        //     'nik' => 'required|unique:users,nik',
        //     'no_telp' => 'required|numeric|digits_between:1,12',
        //     'namaLengkap' => 'required|min:5',
        //     'alamat' => 'required|min:5',
        //     'pekerjaan' => 'required|min:5',
        //     'email' => 'required|unique:users,email',
        //     'password' => 'required|min:8',
        // ]);



        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/posts', $gambar->hashName());

        // User::create([
        //     'gambar' => $gambar->hashName(),
        //     'nik' => $request->nik,
        //     'no_telp' => $request->no_telp,
        //     'namaLengkap' => $request->namaLengkap,
        //     'alamat' => $request->alamat,
        //     'pekerjaan' => $request->pekerjaan,
        //     'email' => $request->email,
        // ]);
        return response()->json([
            'message' => 'success'
        ]);
    }
}
