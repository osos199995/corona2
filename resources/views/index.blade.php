<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>corona</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <STYLE>

    /* Paste this css to your style sheet file or under head tag */
    /* This only works with JavaScript,
    if it's not present, don't show loader */
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 0px; top: 0px; }
    .se-pre-con {
        position: fixed;
        left: 1%;
        top: 4%;
        width: 100%;
        height: 100%;

        background: url(front_assets/middel_logo.png) center no-repeat #fff;
    }
    @font-face{
        font-family: GE SS Unique Bold;
        src: url(fonts/GE SS Unique Bold);
    }
    .win{
        background: url('../front_assets/win.png'); /* The image used */
width: 100%;
        height: 100%; /* You must set a specified height */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .los{
        background: url('../front_assets/lose_background.png'); /* The image used */
        width: 100%;
        height: 100%; /* You must set a specified height */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .upper-logo{

        float: right;
        border-color: red;
        height: 10%;
        vertical-align: middle;
        margin-top: 20px;

    }
        .lower-text{
            width: 30%;
            margin-top: 20%;
            margin-left: 10%;
        }
    @media (max-width: 576px) {
        .pug {
            margin-left: 150px;
        }
        .upper-logo{
            width: 148px;
            float: right;
            border-color: red;
            height: 10%;
            vertical-align: middle;
            margin-top: 20px;

        }
        .result-show{
            margin-left: 45%;
            margin-bottom: -7%;
        }
        .win-result{
            background: cyan;
            width: 28%;
            margin-top: 27%;
            margin-left: 35%
        }
        .start{
            margin-top: 10%;
            left: 23%;
        }
        img.middel{
            height:150px;
            width: 150px;
            margin-left: 106px;
            margin-top: 10px;
        }
        img.middel-text{
            height:10%;
            width: 100%;
            margin-left: 10px;
            margin-top: 30px;
        }
        img.lower-text{
            height:10%;
            width: 100%;
            margin-left: 10px;
            margin-top: 100px;
        }
        img.login-middel{
            height:10%;
            width: 100%;
            margin-left: 80px;
            margin-top: 30px;
        }
        img.login-name{
            height:10%;
            width: 100%;
            margin-left: 10px;
            margin-top: 30px;
        }
        div.form{
            height:10%;
            width: 400%;
            margin-left: 20px;
            margin-top: 10px;
        }
        .question{
            height:15%;
            width: 140%;


            margin-left: 20px;
            margin-top: 10px;
        }
        .answers-right{
            height:15%;
            width: 150px;
            margin-left: 20px;
            margin-top: 10px;
        }
        .answers-left{
            height:15%;
            width: 150px;
            margin-left: -100px;
            margin-top: 10px;
        }
       .next{
           width: 69%;
           top: 100%;
           left: 35%;
     position: absolute;
        }
       .span{
           align-content: center;
           float: right;
       }
       .win-next{
           margin-left: 130px;
           margin-top: 10px;
           width: 200px;
       }
        .win-name{
            margin-left: 160px;
            color: blue;
        }
        .los-text{
            margin-left: 130px;
            margin-top: 10px;
            width: 200px;
        }
        .los-result{
            background: cyan;
            width: 29%;
            margin-top: 4%;
            margin-left: 36%;
        }
        .los-text{
            margin-top: 2%;
            width: 20%;
            margin-right: 30%;
        }
        .btn btn-primary los{
            width: 20%;
            margin-left: 64%;
            margin-top: 15%;
        }
        .los-name{

            margin-left: 32%;
            color: blue;
        }
        .los-next{
            margin-left: 84px;
            margin-top: 10px;
            width: 200px;
        }
    }
    @media (min-width: 992px) {
        .win-result{
            background: cyan;
            width: 12%;
            margin-top: 4%;
            margin-left: -7%;
        }
        .result-show{
            margin-left: 45%;
            margin-bottom: -20%;
        }
       img.middel{ width: 50%;
            margin-top:10px;
        }
        .win-next{
            margin-top: 2%;
            width: 20%;
            margin-right: 30%;
        }
        .win-name{
            margin-left: 1%;
            color: blue;
        }

        .los-name{

         color: blue;
            margin-left: 72px;

        }
        .los-result{
            background: cyan; width: 8%; margin-top: 4%;
        }
        .btn btn-primary los{
            width:20%; margin-left: 35%; margin-top: 15%;
        }
        .los-next{
            margin-top: 2%;
            width: 20%;
            margin-right: 30%;
        }
        .start{
            margin-top: 10%;
            margin-left: 20%;
        }.answers-right{
                     margin-bottom: 20px;
                     margin-top: -10%;
                     border-color: blue;
                     width: 200px;
                     margin-left: -41px;
                     height: 90px;
                     border-width: medium;
                 }.answers-left{
                                       margin-bottom: 20px;
                                       margin-top: -10%;
                                       border-color: blue;
                                       border-width: medium;
                                       width: 200px;
                                       height: 90px;
                                       margin-left: -84px;
                                   }.next{
                                                                           margin-left: -59px;
                                                                           width: 300px;
                                                                           width: 48%;
                                                                           margin-left: -17%;
                                                                           margin-top: 11%;
                                                                           position: absolute;
                                                                       }
                                                                       }

    }
@yield('styles')
    </STYLE>
</head>
<body class="" style="overflow-x: hidden;" >
{{--<div class="se-pre-con" ></div>--}}

@yield('content')
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<SCRIPT>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</SCRIPT>
@yield('scripts')
</html>
