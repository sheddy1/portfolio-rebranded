<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="{{ URL('images/logo1.png') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @extends('header')

    <label class="about_header">About</label>

    <label class="about_details">
    I am a full-stack PHP/Laravel developer with
    strong expertise in social protection and data
     research. I have built several web pages with
      individuals and organizations that I have
      excellent references from. As part of my job
      with the World Bank's National Social Safety
      Nets Coordination Office, I oversaw the data
      of the underprivileged and vulnerable beneficiaries
      in several states in Nigeria. I have refined my craft
      over the years and taken part in multiple organizational
      training courses. I am dedicated, a quick learner, and a lifelong student.
    </label>

    <img src="{{ URL('images/sheddyimg.png') }}" alt="my image" class="about_photo">

    @extends('footer')
</body>
</html>
