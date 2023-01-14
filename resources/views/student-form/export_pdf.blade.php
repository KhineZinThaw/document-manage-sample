<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Form | Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h6 class="text-end pb-5">
        {{ $data?->date }}<br>
        {{ $data?->name }} 
    </h6>
    <h6 class="pb-3">{{ $data?->title }}</h6>
    {!! $data?->description !!}
    <h6 class="text-end pb-3 pt-3">
        {{ $data?->organization_name }} <br>
        {{ $data?->organization_remark }}
    </h6>
</body>
</html>
