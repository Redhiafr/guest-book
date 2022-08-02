<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'telp',
        'instansi',
        'alamat',
        'keterangan'
    ];

    public static function index()
    {
        return Guest::all();
    }
}
