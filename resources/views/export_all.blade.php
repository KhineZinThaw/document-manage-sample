<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Form | Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .page_break {
            page-break-before: always;
        }

    </style>
</head>
<body>
    <div>
        <h6 class="text-end pb-5">
            {{ $studentForm?->date }}<br>
            {{ $studentForm?->name }}
        </h6>
        <h6 class="pb-3">{{ $studentForm?->title }}</h6>
        {!! $studentForm?->description !!}
        <h6 class="text-end pb-3 pt-3">
            {{ $studentForm?->organization_name }} <br>
            {{ $studentForm?->organization_remark }}
        </h6>
    </div>
    <div class="page_break">
        <h6 class="text-end pb-5">
            {{ $teacherForm?->date }}<br>
            {{ $teacherForm?->name }}
        </h6>
        <h6 class="pb-3">{{ $teacherForm?->title }}</h6>
        {!! $teacherForm?->description !!}
        <h6 class="text-end pb-3 pt-3">
            {{ $teacherForm?->organization_name }} <br>
            {{ $teacherForm?->organization_remark }}
        </h6>
    </div>
</body>
</html>
