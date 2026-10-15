<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Students</h1>
    <ul>
        @forelse ($students as $student)            
            <li>{{ $loop->iteration }}/{{ $loop->count }}. {{ $student }} is at index {{ $loop->index }} remaining {{ $loop->remaining }}</li>
        @empty
            <li>No student found</li>            
        @endforelse
    </ul>

    <p>{{ 2 + 3 - 7 * 5 / 4 }}</p>
    <p>{{ "This is text in blade" }}</p>
    {{ "<h3>This is text in blade</h3>" }}
    {!! "<h3>This is text in blade</h3>" !!}

    @php
        $companyname = "Aptech Learning";        
    @endphp

    <h4>{{ $companyname }}</h4>

    
    
</body>
</html>