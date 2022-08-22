<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Daftar extends Model
{

    use HasFactory;
public function getPdf($type = 'stream')
{
    $pdf = app('dompdf.wrapper')->loadView('daftar.pdf', ['guests' => $this]);

    if ($type == 'stream') {
        return $pdf->stream('DaftarTamu.pdf');
    }

    if ($type == 'download') {
        return $pdf->download('DaftarTamu.pdf');
    }
}
}
return $order->getPdf(); // Returns stream default
return $order->getPdf('download'); // Returns the PDF as download
