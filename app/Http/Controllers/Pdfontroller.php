<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Teacher;

class Pdfontroller extends Controller
{
    public function generatepdf()
    {
        $teachers = Teacher::get();
        $data = [
            'title' => 'Student Management system',
            'date' => date('m / d / y'),
            'teachers' => $teachers
        ];

        $pdf = Pdf::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
