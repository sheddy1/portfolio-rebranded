<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="{{ URL('images/logo1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/contact.css') }}">
</head>
<body>
    @extends('header')

    <form class="contact_box" method="post" action="{{ route('message') }}">
        @csrf
        <img src="{{ URL('images/rect.png') }}" alt="bg" class="contact_image"/>
        <label class="contact_header">Contact Me</label>

        <span class="Contact_box_name1">
            <input type="text" name="name" class="Contact_box_name" placeholder="Full Name">
            <span class="contact_error">@error('name'){{ $message }} @enderror</span>
        </span>
        
        <span class="Contact_box_email1">
            <input type="text" name="email" class="Contact_box_email" placeholder="Email Address">
            <span class="contact_error">@error('email'){{ $message }} @enderror</span>
        </span>

        
        <span class="Contact_box_phone1">
            <input type="text" name="phone" class="Contact_box_phone" placeholder="Input Phone Number With Country Code">
            <span class="contact_error">@error('phone'){{ $message }} @enderror</span>
        </span>
        
        <span class="Contact_box_message1">
            <textarea name="message" class="Contact_box_message" placeholder="Message" id="" cols="26" rows="4"></textarea>
            <span class="contact_error">@error('message'){{ $message }} @enderror</span>
        </span>
       

        <button class="contact_info_button">
            Submit
        </button>
    </form>

    <span class="contact_phone">
        <label class="contact_phone1">Phone</label>
        <label class="contact_phone2">07065575067</label>
    </span>

    <span class="contact_email">
        <label class="contact_phone1">Email</label>
        <label class="contact_phone2">shadrachgodwin@gmail.com</label>
    </span>

    <span class="contact_address">
        <label class="contact_phone1">Address</label>
        <label class="contact_phone2">Kado, Abuja, Nigeria.</label>
    </span>

    @extends('footer')
</body>
</html>