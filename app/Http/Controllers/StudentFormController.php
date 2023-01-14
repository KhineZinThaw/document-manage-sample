<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\StudentForm;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentForm = StudentForm::orderBy('id', 'desc')->first();
        $data = session()->get('student_form') ?? [];
        $data = count($data) > 0 ? (object) $data : $studentForm;
        return view('student-form.index', compact('studentForm', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentFormRequest $request)
    {
        StudentForm::create($request->validated());

        return to_route('teacher_form.index');
    }


    public function confirm(StudentFormRequest $request)
    {
        session()->put('student_form', $request->validated());
        $data = $request->validated();

        return view('student-form.confirm', compact('data'));
    }

    public function export()
    {
        $data = session()->get('student_form') ?? [];
        $data = count($data) > 0 ? (object) $data : StudentForm::orderBy('id', 'desc')->first();
        $pdf = PDF::loadView('student-form.export_pdf', compact('data'));
        return $pdf->download('pdf_file.pdf');
    }
}
