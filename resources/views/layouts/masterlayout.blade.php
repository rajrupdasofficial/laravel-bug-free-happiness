<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Template Inheritence | @yield('title','Website')</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <h1>Content template</h1>
        </header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        </nav>
    </div>
    <main>
        <article>
            {{-- yield is used as dynamic data linking or visualization --}}
            @hasSection ('content')
            @yield('content')
            @else
            <h2>No content found</h2>
            @endif

        </article>
        <aside>
            @section('sidebar')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
            @show
        </aside>
    </main>
    <footer>
        Hello World this is a footer section
    </footer>
</body>

</html>