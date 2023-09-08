<h1>header Page</h1>

{{-- <p>{{$name}}</p> --}}
{{-- here we can looping through the array and print them in a list or what ever method we wanted--}}
{{-- @foreach ($names as $key => $value)
<li>{{$key}}-{{$value}}</li>

@endforeach --}}
{{-- for else loop if there is no value in array it will show null or empty so we took an approach as forelse . it's
like conditional --}}
@forelse ($names as $key => $value)
<li>{{$key}} - {{$value}}</li>

@empty
<p>No Value Found.</p>

@endforelse