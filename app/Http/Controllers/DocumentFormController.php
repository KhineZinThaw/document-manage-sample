<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentFormRequest;
use App\Models\Document;
use PDF;
use App\Models\DocumentForm;
use Illuminate\Http\Request;

class DocumentFormController extends Controller
{
    public function index()
    {
        $forms = DocumentForm::where('document_id', 1)->get();
        return view('document.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('document.forms.create');
    }

    public function store(DocumentFormRequest $request)
    {
        DocumentForm::create([
            'document_id' => 1,
            'description' => $request->description,
        ]);

        return to_route('forms.index');
    }

    public function export()
    {
        $datas = DocumentForm::where('document_id', 1)->get()->toArray();
        $pdf = PDF::loadView('document.forms.export', compact('datas'));
        return $pdf->download('pdf_file.pdf');
    }
}
