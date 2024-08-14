<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
         <ul>
            <li><a href="{{ route('test') }}">Master</li>
            <li><a href="{{ route('home') }}">Home</li>
         </ul>
    </nav>
        @yield('content') {{-- similar to @RenderBody() in C# --}}
    <footer>
        <h2>This is my footer</h2>
    </footer>
</body>
</html>