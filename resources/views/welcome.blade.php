<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>なかまっち(⋈◍＞◡＜◍)。✧♡</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Vollkorn', serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }    
            .heart{
                  display: inline-block;
        　　　　　　　　　font-size:2.5em;
　　　　　　　　　position: absolute;
                    left: 0;
                    top: -0.25em;
                    animation: anime4_anime 3s infinite;
            }
                @keyframes anime4_anime{
                0% { color: #FF66FF; }
                15%{ color: #FFFF00;}
                30% { color:#CC99FF; }
                45%{color:#FF9900;}
                55% { color:#99CC33; }
                75%{color :#66CCFF;}
                100%{color:#DD0000;}
                }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                      YOU <a href=#><span class='heart'> ❤ </span> 乃木坂46  </a></div>
        </div>
    </body>
</html>
