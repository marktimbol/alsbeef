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
    </head>
    <body>

        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="fa fa-cutlery fa-3x"></i>
                            <span>Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker fa-3x"></i>
                            <span>Stores</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info fa-3x"></i>
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-phone fa-3x"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div id="page-content-wrapper">
                <header>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="site-title">
                                    <a href="/">
                                        <img src="/images/logo.png" alt="Al's Beef Dubai" title="Al's Beef Dubai" />
                                    </a>
                                </h1>

                                <div class="Search__container pull-right">
                                    <nav class="cl-effect-5">
                                        <a href="#"><span data-hover="Home">Home</span></a>
                                        <a href="#"><span data-hover="Menu">Menu</span></a>
                                        <a href="#"><span data-hover="Stores">Stores</span></a>
                                        <a href="#"><span data-hover="About">About</span></a>
                                        <a href="#"><span data-hover="Contact">Contact</span></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                @yield('content')   
            </div>
        </div>

        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('footer_scripts')
    </body>
</html>
