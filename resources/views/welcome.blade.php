<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LUISA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: rgb({{rand(0,255)}}, {{rand(0,255)}}, {{rand(0,255)}});
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            body{
                background: url(./photo/background/{{rand(1,13)}}.jpg) no-repeat;
                width:100%;
                height:100%;
                background-size:100% 100%;
                position:absolute;
                filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='bg-login.png',sizingMethod='scale');
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
                font-size: 84px;
            }

            .links > a {
                color: rgb({{rand(0,255)}}, {{rand(0,255)}}, {{rand(0,255)}});
                padding: 0 25px;
                font-size: 19px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hi GEORGIA LUISA
                </div>

                <div class="links">
                    <a href="#">GEORGIA: {{date('Y-m-d H:i:s',$gtime)}}   CHINA：{{date('Y-m-d H:i:s')}}  </a>
                </div>


                <div class="links">
                    <a href="#">WE HAVE KNOW {{$ktime}}</a>
                </div>

                <div class="links">
                    <a href="#">wait more...</a>
                </div>
            </div>
        </div>
    </body>
</html>
