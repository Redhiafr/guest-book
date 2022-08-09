<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public static function store(Request $request)
    {
        Guest::create($request->all());
    }

    public function category() {
        return $this->belongsTo(Categories::class);
    }

    
}
