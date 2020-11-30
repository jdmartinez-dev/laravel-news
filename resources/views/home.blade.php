<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel - Home</title>
    </head>

    <body>
        <h1>Usuario: {{ $user }} => {{ $usertype }}</h1>
        {{-- Example x1 --}}
        @forelse ($exampleArr as $item)
            <li>{{ $item }}</li>
        @empty
            <li>Example</li>
        @endforelse
        {{-- Example x2 --}}
        @foreach ($exampleArr2 as $item)
            <li>{{ $item }}</li>
        @endforeach
    </body>
</html>