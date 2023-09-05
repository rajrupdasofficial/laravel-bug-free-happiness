<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages</title>
</head>
<body>
    <h4>See inherited pages route</h4>
    <a href="/">Home page</a>
    <br>
    <a href="/about">View the god damn about page</a>
    <br>
    <a href="{{route('pages')}}">Go to Pages </a>
    <br>
    <a href="{{route ('firstpost')}}">First Post Page</a>
    <br>
</body>
</html>