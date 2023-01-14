<?php

namespace App\Http\Controllers;

use App\Models\StudentForm;
use App\Models\TeacherForm;
use PDF;

class ExportController extends Controller
{
    public function exportAll()
    {
        $studentForm = StudentForm::orderBy('id', 'desc')->first();
        $teacherForm = TeacherForm::orderBy('id', 'desc')->first();
        $pdf = PDF::loadView('export_all', compact('studentForm', 'teacherForm'));
        return $pdf->download('pdf_file.pdf');
    }
}
