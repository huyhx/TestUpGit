<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mpdf\Mpdf as PDF;
use Illuminate\Support\Facades\Storage;

class ExportPdfController extends Controller
{
    public function contract()
    {
        $qr = '/images/image_35.png';
        $logo = '/images/logo.svg';
        return view('exports.pdf_template', compact('qr', 'logo'));
    }

    public function contractOrigin()
    {
        $qr = '/images/image_35.png';
        return view('exports.pdf-origin', compact('qr'));
    }

    public function exportPdf()
    {
        $qr = public_path('/images/image_35.png');
        $logo = '/images/logo.svg';
        // $html = 'exports.formated_pdf_contract';
        $html = 'exports.pdf_contract';

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        // ini_set("pcre.backtrack_limit", "5000000");

        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4-L',
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 5,
            'margin_bottom' => 5,
            'default_font_size' => 39,
            'fontDir' => array_merge($fontDirs, [
                storage_path('app/ttfontdata')
            ]),
            'tempDir' => storage_path('app/public/pdf'),
            'fontdata' => [
                'gothic' => [
                    'R' => 'gothic.ttf',
                ]
            ]
        ]);

        $document->autoScriptToLang  = true;

        $document->autoLangToFont  = true;
    
        $document->showImageErrors = true;
    
        $document->allow_charset_conversion = true;
    
        $document->curlAllowUnsafeSslRequests = true;

        $documentFileName = "contract.pdf";
        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        // $document->WriteHTML(view('exports.pdf_contract', compact('qr')));
        $document->WriteHTML(view('exports.formated_pdf_contract', compact('qr', 'logo')));

        // Save PDF on your public storage 
        // Storage::disk('public')->put(storage_path($documentFileName), $document->Output($documentFileName, "S"));
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
         
        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }

    private function urlImage(): string
    {
        $imageData = base64_encode(file_get_contents(public_path('/images/image_35.png')));
        return 'data:image/png;base64,' . $imageData;
    }
}
