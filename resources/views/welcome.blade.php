@php
// array in php
$fruits = [];//"one"=>"Apple","two"=>"Banana","three"=>"Orange","four"=>"Grapes" // key value paired array
$value = "hello";
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalahari desert</title>
</head>

<body>
    {{-- We can not only import pages but can also send data from one page to another page using below method--}}
    {{-- names is the key and fruit is the value assigned here to pass --}}
    @include('pages.header',['names'=> $fruits])
    <h1>Kalahari</h1>


    {{-- @include('pages.footer') --}}
    {{-- include if directives --}}
    @includeIf('conetent', ['some' => 'data'])
    {{-- IncludeWhen -- method is going to include the pages when the condition will be true --}}
    @includeWhen(empty($value), 'pages.footer', ['some' => 'data'])
    {{-- IncludeUnless -- method is going to include the page when the condition will be false --}}
    @includeUnless(empty($value), 'pages.post', ['some' => 'data'])

</body>

</html>