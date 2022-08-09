<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Category;
use Illuminate\Http\Request;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->paginate(10);
        $data = Guest::latest()->paginate(3);
        $category=Category::all();
        return view('users.index', compact('guests', 'data','category'))
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

        // $users = new Guest;
        // $users->nama = $request->get('nama');
        // $users->telp = $request->get('telp');
        // $users->tujuan = $request->get('tujuan');
        // $users->instansi = $request->get('instansi');
        // $users->keterangan = $request->get('kterangan');

        // $kategori = new Category;
        // $kategori->id = $request->get('kategori_id');

        // $users->category()->associate($kategori);
        // $users->save();

        $input = $request->all();
        Guest::create($input);       
        return redirect()->route('users.index')
        ->with('success', 'Data Berhasil Ditambahkan');
    }
}
