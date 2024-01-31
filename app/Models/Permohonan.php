<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenisPohon',
        'alasan',
        'noPermohonan',
        'tanggalPermohonan',
        'gambarLokasi',
        'kecamatan',
        'kelurahan',
    ];
}
