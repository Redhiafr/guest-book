<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Alert;

class UserController extends Controller
{
    public function index()
    {
        $guests = Guest::orderBy('created_at', 'DESC')->get();
        $data = Guest::latest()->paginate(10);
        $category = Category::all();

        $current_date = Guest::whereDate('created_at', Carbon::today())->get(['nama', 'created_at']);
        $current_week = Guest::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $current_month = Guest::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->get(['nama', 'created_at']);

        return view('users.index', compact('guests', 'data', 'category', 'current_date', 'current_week', 'current_month'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', ['guests' => Guest::index(), 'categories' => Category::index()]);
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
        return redirect()->route('users.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }
}
