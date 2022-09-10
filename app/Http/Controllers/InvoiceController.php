<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function index()
    {
    $pdf = Pdf::loadView('temp-certificate');
    return $pdf->download('certificate.pdf');
    }
}
