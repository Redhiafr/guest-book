<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->paginate(10);
        $data = Guest::latest()->paginate(1);
        return view('users.index', compact('guests', 'data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        // return view('users.index', ['guests' =>Guest::index(), 'categories' =>Category::index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', ['guests' =>Guest::index(), 'categories' =>Category::index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'tujuan' => 'required',
            'kategori_id' => 'required',
            'instansi' => 'required',
            'keterangan' => 'required',
        ]);

        $input = $request->all();
        Guest::create($input);
        return redirect()->route('users.index')->with('success', 'Data Berhasil Ditambahkan');
    }
}
