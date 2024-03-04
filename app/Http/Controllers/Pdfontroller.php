<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payment;

class Pdfontroller extends Controller
{
    public function generatepdf()
    {
        $payments = Payment::get();
        $data = [
            'title' => 'Student Management system',
            'date' => date('m / d / y'),
            'payments' => $payments
        ];

        $pdf = Pdf::loadView('payments.pdf', $data);
        return $pdf->stream('payments.pdf');
    }
}
