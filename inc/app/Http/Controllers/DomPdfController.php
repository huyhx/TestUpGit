<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DomPdfController extends Controller
{
    public function generatePDF()
    {
        $qr = $this->urlImage();
        $pdf = PDF::loadView('exports.pdf-dom', compact('qr'));
        $pdf->setPaper('A4', 'landscape');
        
        return $pdf->download('myPDF.pdf');
        
        // preview in pdf
        // return $pdf->stream('myPDF.pdf');
    }

    private function urlImage(): string
    {
        $imageData = base64_encode(file_get_contents(public_path('/images/image_35.png')));

        return 'data:image/png;base64,' . $imageData;
    }
}
