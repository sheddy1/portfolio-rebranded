<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL('css/header_footer.css') }}">
</head>
<body>
<div class="home_social">
            @yield('home_social')
            <a href="https://www.linkedin.com/in/shadrach-godwin-711748190/"><img src="{{ URL('images/LinkedIn2.png') }}" alt="social1" class="social_size social_link1"></a>
            <a href="https://github.com/sheddy1"><img src="{{ URL('images/github.png') }}" alt="social1" class="social_size social_link2"></a>
            <a href="https://www.instagram.com/sheddy_win/"><img src="{{ URL('images/instagram.png') }}" alt="social1" class="social_size social_link3"></a>
            <a href="https://www.facebook.com/sheddy.sdg/"><img src="{{ URL('images/facebook.png') }}" alt="social1" class="social_size social_link4"></a>
            <a href="https://www.figma.com/files/user/834774453109095530?fuid=834774453109095530"><img src="{{ URL('images/figma.png') }}" alt="social1" class="social_size social_link5"></a>
        </div>
</body>
</html>