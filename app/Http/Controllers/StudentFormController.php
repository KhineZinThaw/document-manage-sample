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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        return back();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
