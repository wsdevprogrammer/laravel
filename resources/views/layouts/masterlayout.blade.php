<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CMS - @yield('title','Website')</title>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
</head>

<body>
    <nav>
        <a href="{{route('home')}}"><img src="https://laravel.com/img/logomark.min.svg" alt="" class="logo"></a>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('users')}}">users</a></li>
            <li><a href="{{route('first-post')}}">Blog</a></li>
        </ul>
    </nav>
    <main>
        @hasSection('content')
        @yield('content')
        @else
        
        <h2>Content Not Found</h2>
        @endif
    </main>
    <footer>
        <p>Footer @copy; Rights All Reserved</p>
    </footer>
</body>

</html>