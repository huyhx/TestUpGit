<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ExportPdfController;
use App\Http\Controllers\DomPdfController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/origin-contract', [PdfController::class, 'originContract']);
Route::get('/origin-pdf-contract', [PdfController::class, 'originPdfContract']);
Route::get('/pdf-contract', [PdfController::class, 'contract']);
Route::get('/pdf-contract-formated', [PdfController::class, 'contractFormated']);
Route::get('/pdf', [PdfController::class, 'exportPdf']);
// Route::get('/pdf', [ExportPdfController::class, 'exportPdf']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/2fa/setup', [RegisterController::class, 'setup2FA'])->name('2fa.setup');
    Route::post('/2fa/enable', [RegisterController::class, 'enable2FA'])->name('2fa.enable');
});