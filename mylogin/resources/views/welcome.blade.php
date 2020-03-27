<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: Verdana, sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            .login, .register {
                font-size: 50px;
                text-decoration: none;
                color: #fff;
                background: #66D9F9;
                padding: 0px 20px 5px 20px;
                border-radius: 5px;
            }

            .register {
                margin-top: 20px;
            }

            .select-zone {
                margin-top: 200px;
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
                    <div class="select-zone">
                        <p><a class="login" href="{{ route('login') }}">Login</a></p>

                        @if (Route::has('register'))
                            <p><a class="register" href="{{ route('register') }}">Register</a></p>
                        @endif
                    </div>
                    @endauth
                </div>
            @endif

            </div>
        </div>
    </body>
</html>


