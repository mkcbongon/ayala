<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700');
        *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        /*   font-family: 'Roboto', sans-serif; */
        font-family: 'Raleway', sans-serif;
        }

        body{background: #191919  }

        .main-box{
        position: relative;
        display: block;
        width: 90%;
        height: 700px;
        margin: 50px auto;
        border-radius: 8px;
        overflow: hidden;
        background:linear-gradient(to right, #232f41, #374a62);
        }

        .lined-link{
        position: relative;
        text-decoration: none;
        transition: all 0.2s linear
        }

        .lined-link:hover{
        opacity: 0.5
        }

        .lined-link:after {
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        bottom: -2px;
        border: none;
        border-bottom: 1px solid #63d5c4;
        }

        /************ Start Slider Container **************/
        .slider-cont,
        .form-cont{
        width: 50%;
        height: 100%;
        float: left;
        }

        .slick-slide,
        .slick-slider{
        width: 100%;
        height: 100% 
        }

        .clear-fix{
        clear: both;
        }

        .slick-dots {
        position: absolute;
        bottom: 10px;
        display: block;
        width: 100%;
        padding: 0;
        list-style: none;
        text-align: center;
        }

        .slick-dots li {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 20px;
        margin: 0 3px;
        padding: 0;
        cursor: pointer;
        }
        .slick-dots li button {
        font-size: 0;
        display: block;
        width: 10px;
        height: 10px;
        padding: 5px;
        cursor: pointer;
        border: 0;
        outline: none;
        background: #8dffea;
        border-radius: 50%;
        transition: all 0.3s ease;
        }

        .slick-dots li.slick-active button{
        background-color: #53C5B9;
        transform: scale(1.6);
        box-shadow: 0 0 10px #1b1b1b
        }

        .img-txt{
        position: relative;
        }

        .img-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(47, 63, 85, 0.53);
        }

        .img-txt h1{
        position: absolute;
        display: block;
        top: 50%;
        color: #fff;
        width: 100%;
        padding: 50px 0;
        font-size: 45px;
        font-weight: 100;
        text-align: center;
        transform: translateY(-50%);
        background-color: transparent;
        }

        /************ Start Form Container **************/

        .top-buttons {
        position: relative;
        display: block;
        width: 100%;
        height: 15%;
        padding: 25px;
        text-align: right;
        }

        .top-buttons button {
        color: #cacaca;
        border: none;
        width: 90px;
        margin: -2px;
        padding: 10px;
        font-size: 16px;
        font-weight: 300;
        background: #4c5c72;
        cursor: pointer;
        }

        .top-buttons button:nth-child(1) {
        border-radius: 50px 0 0 50px;
        }

        .top-buttons button:nth-child(2) {
        border-radius: 0 50px 50px 0;
        }

        .top-active-button {
        color: #fff !important;
        box-shadow: 0 0 20px #2a2a2a;
        background: linear-gradient(#68dac7,#54c7ba) !important;
        transition: all 0.3s ease;
        }

        .form{
        width: 100%;
        height: 85%;
        padding: 10px 40px;
        }

        .form form {
        width: 100%;
        height: 100%;
        }

        .form form 
        lable,
        input[type="text"],
        input[type="email"],
        input[type="password"] {
        display: block;
        }

        .form form lable {
        color: #fff;
        font-size: 16px;
        font-weight: 300;
        margin: 6px 0;
        }

        p.terms {
        color: #9E9E9E;
        margin-bottom: 60px;
        }

        .form form 
        input[type="text"],
        input[type="email"], 
        input[type="password"] {
        color: #fff;
        width: 100%;
        border: none;
        font-size: 16px;
        font-weight: 200;
        margin-bottom: 45px;
        padding: 5px 0 10px 0;
        background: transparent;
        border-bottom: 1px solid #4c5c72;
        }

        .form form input::placeholder{
        color: #cecece;
        }

        .form form a {
        color: #fff;
        }

        input.form-btn {
        color: #fff;
        font-size: 18px;
        font-weight: 300;
        padding: 12px 55px;
        margin-right: 20px;
        border: none;
        cursor: pointer;
        border-radius: 35px;
        transition: all 0.3s linear;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.55);
        background: linear-gradient(to right, #5bcdbe,#41ab9e);
        }

        input.form-btn:hover{
        box-shadow: none
        }

        .form-signin{
        display: none;
        padding-top: 120px;
        }
        </style>
</head>
<body>
    <div class="main-box">
        <div class="slider-cont">
          <div class="signup-slider">
            <div class="img-txt">
              <div class="img-layer"></div>
              <h1>The hardest part of starting up is starting out for you.</h1>
              <img src="{{ asset('ayala/pexels-photo.jpg') }}"/>
            </div>
            <div class="img-txt">
              <div class="img-layer"></div>
              <h1>We understand you and your business, We have the right solutions for you.</h1>
              <img src="{{ asset('ayala/pexels-photo-257897.jpeg') }}"/>
            </div>
            <div class="img-txt">
              <div class="img-layer"></div>
              <h1>Join US Now!</h1>
              <img src="{{ asset('ayala/pexels-photo-317383.jpeg') }}"/>
            </div>
          </div>
        </div>
        
        
        <div class="form-cont">
      
          <div class="top-buttons">
            <button class="to-signup top-active-button">
              Sign Up
            </button>
            <button class="to-signin">
              Sign In
            </button>
          </div>
          
          <div class="form form-signup">
            <form method="POST" action="{{ url('/signup') }}">
              @csrf
              <lable>FULL NAME</lable>
              <input type="text" name="fullname"
                     placeholder="Your full name">
              <lable>E-MAIL</lable>
              <input type="email" name="email"
                     placeholder="Your e-mail">
              <lable>PASSWORD</lable>
              <input type="password"  name="password"
                     placeholder="Your password">
              <p class="terms">
                <input type="checkbox">
                I agree all statments in 
                <a href="#" class="lined-link">terms of service</a>
              </p>
              <input type="submit"
                     class="form-btn"
                     value="Sign Up"/>
              <br><br>
            </form>
          </div>
      
          <div class="form form-signin">
            <form action="{{ url('/login') }}" method="POST">
              @csrf
              <lable>E-MAIL</lable>
              <input type="email"  name="email"
                     placeholder="Your e-mail">
              <lable>PASSWORD</lable>
              <input type="password" name="password"
                     placeholder="Your password">
              <input type="submit"
                     class="form-btn"
                     value="Sign In"/>
              <br><br>
            </form>
          </div>
        </div>
        <div class="clear-fix"></div>
      </div>
      <script>
          $(document).ready(function(){
                $('.signup-slider').slick({
                    dots: true,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000
                });

                $("img").height($(".main-box").height());

                $(".to-signin").on("click", function () {
                    $(this)
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                    $(".form-signup").slideUp(500);
                    $(".form-signin").slideDown(500);
                });

                $(".to-signup").on("click", function () {
                    $(this)
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                    $(".form-signin").slideUp(500);
                    $(".form-signup").slideDown(500);
                });

                $(".to-signin-link").on("click", function () {
                    $(".to-signin")
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                    $(".form-signup").slideUp(200);
                    $(".form-signin").slideDown(200);
                });

                $(".to-signup-link").on("click", function () {
                    $(".to-signup")
                    .addClass("top-active-button")
                    .siblings()
                    .removeClass("top-active-button");
                    $(".form-signin").slideUp(200);
                    $(".form-signup").slideDown(200);
                });
                });


                </script>
</body>
</html>