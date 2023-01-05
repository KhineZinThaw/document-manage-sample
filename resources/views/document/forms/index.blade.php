@extends('layout.master')
@section('content')
<div class="container py-5">
    <h1 class="text-center">Form</h1>
    <div class="d-flex">
        <a href="{{ route('forms.create') }}" class="btn btn-primary float-end">Create Form</a>
        <a href="{{ route('forms.export') }}" class="btn btn-secondary float-end">Export to PDF</a>
    </div>
    <div class="row justify-content-center my-5">
        <div class="card">
            <div class="card-body">
               @foreach ($forms as $form)
                   {!! $form->description !!}
               @endforeach
            </div>
        </div>
    </div>
</div>
@endsection