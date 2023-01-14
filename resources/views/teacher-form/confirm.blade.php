<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Form | Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight"><a href="{{ route('teacher_form.export') }}" class="btn btn-primary">Export PDF</a></div>
            <div class="p-2 bd-highlight"><a href="{{ route('teacher_form.index') }}" class="btn btn-secondary">Back</a></div>
          </div>
        <div class="mt-5 border border-dark px-5 py-3">
            <h6 class="text-end pb-5">
                {{ $data['date'] }} </br>
                {{ $data['name'] }} 
            </h6>
            <h6 class="pb-3">{{ $data['title'] }}</h6>
            {!! $data['description'] !!}
            <h6 class="text-end pb-3 pt-5">
                {{ $data['organization_name'] }} <br>
                {{ $data['organization_remark'] }}
            </h6>
        </div>
    </div>
</body>
</html>
