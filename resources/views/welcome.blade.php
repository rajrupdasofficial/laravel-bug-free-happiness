<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalahari desert</title>
</head>

<body>
    <h1>Kalahari</h1>
    {{-- Mathematical calculation blade syntax --}}
    {{5+2}}
    <br> <br>

    {{ "Hello world" }}
    <br> <br>
    {{-- This will print as it is written due to laravel and blade template security --}}
    {{"<h1>Hello world</h1>"}}
    {{-- To print it properly --}}
    {!! "<h1>Hello World </h1>" !!}

    {{-- Example of javascript --}}
    {{-- {!! "<script>
        alert('Laracroft')
    </script>" !!} --}}

    {{-- Variales defining in laravel php --}}
    @php
    $user="Laracroft"
    @endphp
    {{$user}}
    {{-- Arrays in Blade template Laravel --}}
    @php
    $names = ["Laracroft","Addison","Max","Peter"];
    $buser = "Laracroft";
    @endphp
    <ul>
        @foreach ($names as $name)
        <li>{{$name}}</li>
        @endforeach
    </ul>
    {{-- as it is printing --}}
    @{{$buser}}
    @@if()

    {{-- Blade Loop variables --}}
    <ul>
        @foreach($names as $name)
        {{-- loop's property is index to print index number of a variable --}}
        {{-- <li>{{ $loop->index }} - {{$name}}</li> --}}
        {{-- Loop with iteration counts index number from - 1--}}
        {{-- <li>{{ $loop->iteration }} - {{ $name }} </li> --}}
        {{-- Loop property with count to count up all of the avilable arrays --}}
        {{-- <li>{{ $loop->count }} - {{$name}}</li> --}}
        {{-- loop propery with conditional statment fist and last--}}
        @if($loop->first)
        <li style="color: lime">{{$name}}</li>
        @elseif($loop->last)
        <li style="color: yellow">{{$name}}</li>
        @elseif($loop->even)
        <li style="color: blue">{{$name}}</li>
        @elseif($loop->odd)
        <li style="color: crimson">{{$name}}</li>
        @else
        <li style="color: orange">{{$name}}</li>
        @endif



        @endforeach
    </ul>
</body>

</html>