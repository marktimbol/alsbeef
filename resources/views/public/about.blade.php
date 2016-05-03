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
                    <h2 class="Page__header--title">Who we are?</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row Page__content">
                    <div class="col-md-9">
                        <h3 class="Page__subtitle">The Sandwich That Started It All</h3>
                        <p>
                            The history of Al’s #1 Italian Beef Restaurants dates back to 1938 when Al Ferrari and his sister and brother-in-law, Frances and Chris Pacelli, Sr., developed the original idea and recipe for the original Italian beef sandwich. The great Chicago sandwich was actually formed out of necessity during the Great Depression when meat was scarce. In order to make the most of what they had, Chris and Al would slice the meat very thin and place it on thick loaves of fresh made Italian bread. The original recipe, which is still used in all Al’s Beef locations today, was developed in Al’s home kitchen. The family sold the delicious sandwiches at a neighborhood food stand and delivered them to local businesses until they opened their current location on West Taylor Street in Chicago. It was at this storefront where they added other items to the menu, including Italian sausage, Chicago hot dogs, homemade hand-cut French fries and Polish sausages, to name a few. Taylor Street remains today as one of Chicago's truly iconic food destinations.
                        </p>

                        <h3 class="Page__subtitle">From Food Stand to Franchise</h3>
                        <p>
                            What started in 1938 as a neighborhood food stand in Chicago’s “Little Italy,” has grown into a quintessential food icon and Chicago legend. In 1999, Dave Howey of Chicago Franchise Systems, Inc., owner and franchisor of Nancy’s Pizza, purchased the rights to Al’s #1 Italian Beef Restaurants. A longtime customer himself since 1974, Mr. Howey saw the potential and expanded the local legend to other markets, opening the first franchise location in Tinley Park, IL in 2001. Howey has continued to expand the restaurant across the country from Las Vegas to southern California with many new locations on the horizon.
                        </p>
                        <h3 class="Page__subtitle">Spokesperson</h3>
                        <p>
                            We are proud to have Mike Ditka, retired Hall of Fame NFL football player, former NFL coach and TV commentator, as our official spokesperson, advisor, and "taster" who is working with the company to scout new franchise locations across the country in NFL cities.
                        </p>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>  
        </div>
    </div>
    
@endsection
