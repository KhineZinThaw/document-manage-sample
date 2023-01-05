@extends('layout.master')
@section('content')
@section('content')
<div class="container py-5">
    <h1 class="text-center">Create Form</h1>
    <div class="d-flex">
        <a href="{{ route('forms.index') }}" class="btn btn-secondary float-end">Back</a>
    </div>
    <div class="row justify-content-center my-5">
        <form action="{{ route('forms.store') }}" method="post">
            @csrf

            <textarea name="description" id="editor"></textarea>
            <button type="submit" class="btn btn-primary mt-5">Save</button>
        </form>
    </div>
</div>
@endsection
