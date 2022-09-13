<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use Carbon\Carbon;
use DB;
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

        $guests = Guest::orderBy('created_at', 'DESC')->get();
        $data = Guest::latest()->paginate(10);
        $category = Category::all();

        $current_date = Guest::whereDate('created_at', Carbon::today())->get(['nama', 'created_at']);
        $current_week = Guest::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $current_month = Guest::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->get(['nama', 'created_at']);

        $record = Guest::select(DB::raw("COUNT(*) as total"), DB::raw("DATE(created_at) as day_name"))
                    ->whereMonth('created_at', date('m'))
                    ->groupBy(DB::raw('Date(created_at)'))
                    ->get();

        $labels = $record->pluck('day_name');
        $datacharts = $record->pluck('total');

        return view('admin.index', compact('guests', 'data', 'category', 'current_date', 'current_week', 'current_month', 'record', 'labels', 'datacharts'))
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
        $tanggal1 = Carbon::parse($start_date)->format('d F Y');
        $end_date = Carbon::createFromFormat('Y-m-d', $request->end_date)->toDateString();
        $tanggal2 = Carbon::parse($end_date)->format('d F Y');
        $guests = Guest::select('*')
            ->whereRaw('DATE_FORMAT(created_at, "%Y-%m-%d") between "' . $request->start_date . '" and "' . $end_date . '"')
            ->get();

        $category = Category::all();
        $pdf = PDF::loadview('admin.daftar', compact('guests', 'category', 'start_date', 'end_date', 'tanggal1', 'tanggal2'));
        return $pdf->stream();
    }
}
