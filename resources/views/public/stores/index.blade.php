@extends('layouts.public')
@section('header_styles')
    <style>
        .Page__header--bg {
            background-image: url('../../images/store.jpg');
            background-position: 0px -400px;
        }
    </style>
@endsection 
@section('content')
    <div class="Page">
        <div class="Parallax">
            <div class="Page__header--bg Parallax__item">
                <div class="Page__header">  
                    <h2 class="Page__header--title">Our Stores</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row Page__content">
                    <div class="col-md-9">
                        @foreach( range(1, 3) as $index)
                        <h3 class="Page__subtitle">Jumeirah Beach Road (JBR)</h3>
                        <address>
                            <p>
                                <strong>Phone:</strong>
                                +971 341 2922
                            </p>
                            <p>
                                <strong>E-Mail:</strong>
                                <a href="mailto:jumeirah@alsbeef.ae">jumeirah@alsbeef.ae</a>
                            </p>
                            <p>
                                <strong>Address:</strong>
                                Umm Suqeim 2, Jumeirah Street Corner of Ja'rada Street,<br />
                                Opposite Samba Bank, Dubai, United Arab Emirates
                            </p>
                        </address>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <hr />
                        @endforeach
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>  
        </div>
    </div>
    
@endsection
