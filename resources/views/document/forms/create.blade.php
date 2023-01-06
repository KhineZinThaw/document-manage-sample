@extends('layout.master')
@section('content')
@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-end">
        <a href="{{ route('forms.index') }}" class="btn btn-secondary float-end">Back</a>
    </div>
    <div class="row justify-content-center my-5">
        <form action="{{ route('forms.store') }}" method="post">
            @csrf

            <textarea name="description" id="editor"></textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span></br>
            @enderror
            <button type="submit" class="btn btn-primary mt-3">Save and Close</button>
        </form>
    </div>
</div>
@endsection
