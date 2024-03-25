<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL('css/header_footer.css') }}">
</head>
<body>
<header>
            @yield('home_header')
            <img src="{{ URL('images/logo1.png') }}" class="home_header_logo">
            <label class="home_header_name">Shadrach Godwin</label>
            <nav>
                <ul>
                    <li><a href="{{ route('welcome') }}" class="home_header_nav1">Home</a></li>
                    <li><a href="{{ route('about') }}" class="home_header_nav2">About</a></li>
                    <li><a href="{{ route('projects') }}" class="home_header_nav3">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="home_header_nav4">Contact</a></li>
                </ul>
            </nav>
            <button class="home_header_btn">Download CV</button>
        </header>
</body>
</html>