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
                    <h2 class="Page__header--title">Media</h2>
                    <p class="lead">
                        Over the years, Al’s Italian Beef has been recognized as a Chicago food icon and has received accolades from industry experts and media.
                    </p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row Page__content">
                    <div class="col-md-9">
                        <div class="Video__container">
                            <iframe width="970" height="540" src="https://www.youtube.com/embed/Tnlt9CN64UU" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3>Food Porn: Al's Italian Beef in Chicago</h3>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        </p>    
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <hr />
                    </div>
                    @foreach( range(1, 3) as $index )
                        <div class="col-md-4">
                            <div class="Video__container">
                                <iframe width="420" height="235" src="https://www.youtube.com/embed/Tnlt9CN64UU" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>  
        </div>
    </div>
    
@endsection
