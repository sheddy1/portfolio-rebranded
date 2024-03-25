<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="icon" href="{{ URL('images/logo1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/projects.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    @extends('header')

    <img src="{{ URL('images/left.png') }}" alt="left"  class="left"/>

    <img src="{{ URL('images/right.png') }}" alt="right"  class="right"/>

    

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- grm -->
            <div class="swiper-slide">
                <img src="{{ URL('images/grm.png') }}" alt="grm"  class="scroll1_grm"/>

                

                <span class="scroll1_writeup">
                    <label class="scroll1_header">NASSP GRM</label>

                    <label class="scroll1_body">
                        In order to facilitate the collection 
                        of grievances related to the project, 
                        the National Social Safety Nets program 
                        Grieviance Readdress Mechanism site 
                        (NASSP GRM) and a mobile app were created.
                    </label>

                    <button class="scroll1_btn1">
                        View Website
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>

            <!-- police-->
            <div class="swiper-slide">
                <img src="{{ URL('images/police.png') }}" alt="grm"  class="scroll1_grm"/>

                

                <span class="scroll1_writeup">
                    <label class="scroll1_header">NPCTIS</label>

                    <label class="scroll1_body">
                    The Nigerian Police crime tracking 
                    system, is a website that was 
                    created to keep track of the 
                    criminal information within Nigeria.
                    </label>

                    <button class="scroll1_btn1">
                        View Website
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>

            <!-- Strafe-->
            <div class="swiper-slide">
                <img src="{{ URL('images/secure.png') }}" alt="grm"  class="scroll1_grm"/>

                <span class="scroll1_writeup">
                    <label class="scroll1_header">STRAFE</label>

                    <label class="scroll1_body">
                        The secure file sharing system 
                        was created to ensure secure 
                        file sharing between users online, 
                        with an enhanced end to end encryption
                    </label>

                    <button class="scroll1_btn1">
                        View Website
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>

            <!-- adim abua -->
            <div class="swiper-slide">
                <img src="{{ URL('images/adim.png') }}" alt="grm"  class="scroll1_grm"/>

                

                <span class="scroll1_writeup">
                    <label class="scroll1_header">ADIM ABUA</label>

                    <label class="scroll1_body">
                        This is a real estate site 
                        designed for Adim Abua real 
                        estate industries which enables 
                        people to buy houses and stores comfortably
                    </label>

                    <button class="scroll1_btn1">
                        View Website
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>

            <!-- systems and furniture-->
            <div class="swiper-slide">
                <img src="{{ URL('images/sf.png') }}" alt="grm"  class="scroll1_grm"/>

                

                <span class="scroll1_writeup">
                    <label class="scroll1_header">SYSTEMS AND FURNITURE</label>

                    <label class="scroll1_body">
                        A website created for systems 
                        and furniture industry to enable 
                        users to view and book for the 
                        creation of beautiful spaces for their homes 
                    </label>

                    <button class="scroll1_btn1">
                        View Website
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>
            
            <!-- GRM MOBILE -->
            <div class="swiper-slide">
                <img src="{{ URL('images/grm_mobile.png') }}" alt="grm"  class="scroll1_grm_mobile"/>

                

                <span class="scroll1_writeup">
                    <label class="scroll1_header">GRM MOBILE APP</label>

                    <label class="scroll1_body">
                    The GRM mobile application was 
                    created alongside the website 
                    to enhance the collection of 
                    grievances which concerns 
                    the NASSP project
                    </label>

                    <button class="scroll1_btn1">
                        Download APK
                    </button>

                    <button class="scroll1_btn2">
                        View Github Repo
                    </button>
                </span>
            </div>
        </div>
    </div>
    
    @extends('footer')


    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
      nextEl: ".right",
      prevEl: ".left",
    },
    mousewheel: true,
    keyboard: true,
  });
</script>
</body>
</html>