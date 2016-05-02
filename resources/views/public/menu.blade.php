@extends('layouts.public')

@section('content')
    <div class="Page">
        <div class="Parallax">
            <div class="Page__header--bg Parallax__item">
                <div class="Page__header">  
                    <div class="SearchContainer">
                        <div class="form-group">
                            <label>What are you looking for?</label>
                            <input type="text" name="search" class="form-control input-lg" placeholder="Sandwich, Burger, Hot Dogs" />
                        </div>
                    </div>   
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="Page__title">Our Menus</h2>
                    </div>

                    <div class="Menus">
                        @foreach( range(1, 12) as $index )
                        <div class="col-md-4 col-xs-12">
                            <div class="Card">
                                <a href="#" class="Card__link">
                                    <div class="Card__image">
                                        <img src="/images/menus/bacon.jpg" alt="" title="" class="img-responsive" />
                                    </div>
                                    <div class="Card__content">
                                        <h3 class="Card__title">NEW! Al's Italian Beef</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
@endsection
