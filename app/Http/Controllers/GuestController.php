<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;

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
        $category=Category::all();
        return view('admin.index', compact('guests', 'data','category'))
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
        //
    }
    
    public function daftar()
    {
        $guests = Guest::all();
        $category=Category::all();
        $pdf = PDF::loadview('admin.daftar', compact('guests','category'));
        return $pdf->stream();
    }
}
