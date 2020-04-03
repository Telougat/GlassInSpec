<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GlassInSpec</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app" class="w-full min-h-screen items-center flex justify-center">


                {{--@if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <comptes></comptes> --}}

                <formfacture class="w-1/4 mr-12"></formfacture>

            <div class="w-1/4">
                <stock></stock>
            </div>



        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
