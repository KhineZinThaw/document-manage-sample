<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\TeacherForm;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherFormRequest;

class TeacherFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherForm = TeacherForm::orderBy('id', 'desc')->first();
        $data = session()->get('teacher_form') ?? [];
        $data = count($data) > 0 ? (object) $data : $teacherForm;
        return view('teacher-form.index', compact('teacherForm', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherFormRequest $request)
    {
        TeacherForm::create($request->validated());

        return back();
    }


    public function confirm(TeacherFormRequest $request)
    {
        session()->put('teacher_form', $request->validated());
        $data = $request->validated();

        return view('teacher-form.confirm', compact('data'));
    }

    public function export()
    {
        $data = session()->get('teacher_form') ?? [];
        $data = count($data) > 0 ? (object) $data : TeacherForm::orderBy('id', 'desc')->first();
        $pdf = PDF::loadView('teacher-form.export_pdf', compact('data'));
        return $pdf->download('pdf_file.pdf');
    }
}
