<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index(){
        $jenisPohon = Permohonan::all();
        return view('pages.users.buatPermohonanPenebanganPohon', compact('jenisPohon'));
    }
}
