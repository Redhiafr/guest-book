<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $guests = Guest::latest()->paginate(10);
        $data = Guest::latest()->paginate(3);
        $category = Category::all();
        return view('admin.index', compact('guests', 'data', 'category'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
    
    }

    

    public function cetak(Request $request)
    {
        $start_date = Carbon::createFromFormat('Y-m-d', $request->start_date)->toDateString();
        $end_date = Carbon::createFromFormat('Y-m-d', $request->end_date)->toDateString();

        $guests = Guest::select('*')
            ->whereRaw('DATE_FORMAT(created_at, "%Y-%m-%d") between "' . $request->start_date . '" and "' . $end_date . '"')
            ->get();

        $category = Category::all();
        $pdf = PDF::loadview('admin.daftar', compact('guests', 'category'));
        return $pdf->stream();
    }
}
