<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use \Mpdf\Mpdf;
use \Mpdf\Mpdf as PDF;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    private string $qr = '/images/image_35.png';
    private string $logo = '/images/logo.svg';

    public function originContract()
    {
        $qr = $this->qr;
        return view('exports.origin-contract', compact('qr'));
    }

    public function contract()
    {
        $qr = $this->qr;
        $logo = $this->logo;
        return view('exports.pdf_contract', compact('qr', 'logo'));
    }

    public function contractFormated()
    {
        $qr = $this->qr;
        return view('exports.formated_pdf_contract', compact('qr'));
    }

    public function originPdfContract()
    {
        $qr = $this->qr;
        return view('exports.origin_pdf_contract', compact('qr'));
    }

    public function exportPdf()
    {
        $qr = public_path('/images/image_35.png');
        $logo = public_path('/images/logo.svg');
        // $html = 'exports.formated_pdf_contract';
        $html = 'exports.pdf_contract';

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        // ini_set("pcre.backtrack_limit", "5000000");

        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 5,
            'margin_bottom' => 5,
            // 'default_font_size' => 39,
            'fontDir' => array_merge($fontDirs, [
                // storage_path('app/ttfontdata')
                storage_path('app/bizudpgothic')
            ]),
            'tempDir' => storage_path('app/public/pdf'),
            'fontdata' => [
                'bizudpgothic' => [
                    'R' => 'bizudpgothic.ttf',
                    'B' => 'bizudpgothic.ttf.B'
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

        $document->WriteHTML(view($html, compact('qr', 'logo')));

        // Save PDF on your public storage 
        // Storage::disk('public')->put(storage_path($documentFileName), $document->Output($documentFileName, "S"));
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
         
        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }

    public function exportPdf22()
    {
        $qr = $this->urlImage();
        return $this->export(view('exports.pdf_contract', compact('qr'))->render());
    }

    private function urlImage(): string
    {
        $imageData = base64_encode(file_get_contents(public_path($this->qr)));
        return 'data:image/png;base64,' . $imageData;
    }

    private function export($html)
    {
        $filename = 'contract.pdf';
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();

        $fontDirs = $defaultConfig['fontDir'];

        // ini_set("pcre.backtrack_limit", "5000000");

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4-L',
            // 'margin_left' => 5,
            // 'margin_right' => 5,
            // 'margin_top' => 5,
            // 'margin_bottom' => 15,
            'default_font_size' => 39,
            'fontDir' => array_merge($fontDirs, [
                storage_path('app/ttfontdata')
            ]),
            'tempDir' => storage_path('app/mpdf'),
            'fontdata' => [
                'gothic' => [
                    'R' => 'gothic.ttf',
                ]
            ]
        ]);

        $mpdf->autoScriptToLang  = true;

        $mpdf->autoLangToFont  = true;

        $mpdf->showImageErrors = true;

        $mpdf->allow_charset_conversion = true;

        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);

        // return $mpdf->Output($filename, 'I');
        return $mpdf->Output(storage_path('app/public/pdf/' . $filename, 'I'));
    }
}
