<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="{{ asset('images/logo1.png') }}">
    <link rel="stylesheet" href="{{ URL('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <Style>
        body{
            background: url("/images/bg.jpg") no-repeat center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        .cover_box{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
        }
        
        .cover_box1{
            width: 100%;
            height: 100%;
            background-color: #212524;
            position: absolute;
            top: 0px;
            left: 0px;
            opacity: 0.4;
        }
        
        
        
        .decoy{
            width: 50px;
            height: 40px;
            /* background-color: rgb(9, 126, 87); */
            position: absolute;
            top: 50px;
            right: 0px;
        }
        
        
        
        .comp2{
            width: 450px;
            height: 270px;
            /* background-color: azure; */
            position: absolute;
            left: 50px;
            top: 150px;
        }
        
        .comp2_lab1{
            font-size: 40px;
            color: #D5A979;
            font-weight: 300;
            font-family: roboto;
        }
        
        @media(max-width: 1100px){
            .comp2{
                top: 350px;
            }
            
        }
        
        @media(max-width: 670px){
            .comp2{
                top: 250px;
            }
            
        }
        
        
        @media(max-width: 470px){
            .comp2{
                left: 30px;
            }
            
        }
        
        .comp2_lab2{
            font-size: 80px;
            color: #D5A979;
            font-weight: 600;
            font-family: roboto;
            position: absolute;
            top: 50px;
            left: 0px;
        }
        
        .comp2_lab3{
            font-size: 30px;
            color: #D5A979;
            font-weight: 600;
            font-family: roboto;
            position: absolute;
            top: 150px;
            left: 0px;
        }
        
        .comp2_btn{
            font-size: 20px;
            color: #D5A979;
            font-weight: 600;
            font-family: roboto;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 200px;
            height: 40px;
            border-radius: 30px;
            border: 2px solid #D5A979;
            background: none;
            cursor: pointer;
        }
        
        .home_header_nav1{
            color: hsl(165, 61%, 70%)
        }
        
        @media(max-width: 520px){
            .comp2_lab2{
                font-size: 50px;
            }
        }
        
        @media(max-width: 340px){
            .comp2_lab2{
                font-size: 30px;
            }
        
            .comp2_lab1{
                font-size: 30px;
            }
        }
        
        @media(max-width: 520px){
            .comp2_lab3{
                font-size: 20px;
                top: 130px;
            }
        
            .comp2_btn{
                bottom: 50px;
            }
        }
        
        
        @media(max-width: 400px){
            .comp2_lab3{
                font-size: 20px;
                top: 120px;
            }
        }
        
        @media(max-width: 270px){
            .comp2_lab3{
                font-size: 13px;
                
            }
        }
        
        @media(max-width: 270px){
            .comp2_btn{
                width: 120px;
                height:25px;
                font-size: 13px;
                bottom: 70px;
            }
        }


    </Style>
</head>
<body>
    <div class="cover_box">
        <span class="cover_box1"></span>
        @extends('header')

        <div class="comp2">
            <label class="comp2_lab1">GODWIN</label>
            <label class="comp2_lab2">SHADRACH</label>
            <label class="comp2_lab3">Fullstack Web Developer</label>
            <button class="comp2_btn">Hire Me!</button>
        </div>

        @extends('footer')
        <!-- <span class="decoy"></span> -->
    </div>
</body>
</html>

