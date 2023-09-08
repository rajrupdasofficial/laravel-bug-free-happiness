@extends('layouts.masterlayout')
@section('content')
{{-- <h3>Post Page</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, placeat laudantium nihil voluptatem nulla cumque
    delectus numquam repellat dolorum molestias facilis voluptas dolorem distinctio. Nihil maiores pariatur hic
    consectetur esse. Enim quod aliquid, nobis perspiciatis totam, numquam nam necessitatibus ab fugit soluta excepturi
    pariatur sit. Veniam cum nihil, voluptatem, commodi odio earum in corrupti modi quidem eligendi quas libero
    exercitationem aut repellendus sed debitis. Tenetur natus facere voluptatum facilis doloremque laboriosam voluptas
    asperiores ea nostrum totam, atque quod dignissimos, officiis molestias dolore, nihil maiores suscipit minus labore.
    Quisquam doloribus quos voluptatibus aliquam pariatur doloremque corrupti commodi eos. Optio, hic mollitia?</p> --}}

@endsection
{{--
@section('title')
Post
@endsection --}}
@section('sidebar')
{{-- took it as a parent of the section --}}
@parent
<p>This is append to the master sidebar</p>
@endsection