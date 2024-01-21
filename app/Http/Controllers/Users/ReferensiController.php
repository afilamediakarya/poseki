<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferensiController extends Controller
{
    public function index(){
        return view('pages.users.referensiPohon');
    }
}
