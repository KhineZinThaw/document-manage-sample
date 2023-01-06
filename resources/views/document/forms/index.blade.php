@extends('layout.master')
@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route('forms.create') }}" class="btn btn-primary me-3">Create Form</a>
        <a href="{{ route('forms.export') }}" class="btn btn-secondary">Export to PDF</a>
    </div>
    <div class="row justify-content-center my-5">
        @if(count($forms) > 0)
        <div class="card">
            <div class="card-body">
               @foreach ($forms as $form)
                   {!! $form->description !!}
               @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection