<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    </head>

    <body>
        
    <div class="container">

        <a href="{{route('home')}}">Home</a>
        <a href="{{route('about')}}">About</a>
    
        <h1>
            {{$mess}}
        </h1>
    
        <ul>
            @foreach($teachers as $teacher)
            <li>
                {{$teacher}}
            </li>
            @endforeach
        </ul>
    </div>

    </body>
    
</html>
