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
        'tujuan',
        'kategori_id',
        'instansi',
        'keterangan'
    ];

    public static function index()
    {
        return Guest::all();
    }

    public function category() {
        return $this->belongsTo(Categories::class);
    }
}
