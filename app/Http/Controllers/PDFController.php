<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Laporan;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $laporan = Laporan::findOrFail($id);
        $pdf = Pdf::loadView('laporan.pdf', compact('laporan'));

        return $pdf->download('laporan_kegiatan_' . $laporan->id . '.pdf');
    }
}



