@extends('layouts.public')

@section('content')
    <div class="Page">
        <div class="Parallax">
            <div class="Page__header--bg Parallax__item">
                <div class="Page__header">  
                    <h2 class="Page__header--title">Italian Beef Sandwich</h2>
                    <p class="lead">
                        Al's beef is dry roasted in a secret recipe blend of 100% pure spices and natural juices. Our beef is pure.  The Au Jus or Gravy as Al calls it, is where all of our flavors are soaking with the beef.
                    </p>
                </div>
            </div>

            <div class="container-fluid Page__content">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="Page__subtitle">Description</h3>
                        <p>
                            Al's beef is dry roasted in a secret recipe blend of 100% pure spices and natural juices. Our beef is pure.  The Au Jus or Gravy as Al calls it, is where all of our flavors are soaking with the beef.  We will add as little or as much "gravy" to your sandwich as you want. But most Al's connoisseurs prefer their beef sandwich wet or dipped and with sweet and hot peppers.
                        </p>
                        @foreach( range(1, 5) as $index )
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        @endforeach
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row Related">
                    <div class="col-md-12">
                        <h3 class="Page__subtitle">Are you not entertained? Is this not why you are here?</h3>
                        <p class="lead">Here are more menu items to entertain you.</p>
                    </div>

                    <div class="Menus">
                        @foreach( range(1, 4) as $index )
                        <div class="col-md-3 col-xs-6">
                            <div class="Card">
                                <a href="{{ route('menus.show', 1) }}" class="Card__link">
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
