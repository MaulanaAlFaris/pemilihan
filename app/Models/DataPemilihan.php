<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemilihan extends Model
{
    use HasFactory;

    protected $table = 'data_pemilihans';

    // Kolom-kolom lainnya sesuai kebutuhan
    protected $fillable = [
        'al', 'ap', 'aj', 'b1l', 'b1p', 'b1j', 'b2l', 'b2p', 'b2j',
        'b3l', 'b3p', 'b3j', 'b4l', 'b4p', 'b4j', 'c1', 'c2', 'c3',
        'c4', 'dl', 'dp', 'dj'
    ];
}
