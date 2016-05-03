<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?=$pageTitle?> | Al's Beef Dubai, UAE</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        @yield('header_styles')
    </head>
    <body>
        <div id="wrapper">
            @include('layouts._sidebar')
            <div id="page-content-wrapper">
                @include('layouts._header')
                @yield('content')   
                @include('layouts._footer')
            </div>
        </div>

        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('footer_scripts')
    </body>
</html>
