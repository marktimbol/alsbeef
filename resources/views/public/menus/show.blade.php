@extends('layouts.public')

@section('content')
    <div class="Page">
        <div class="Parallax">
            <div class="Page__header--bg Parallax__item">
                <div class="Page__header">  
                    <h2 class="Page__header--title">Menu Name</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row Page__content">
                    <div class="col-md-9">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="Page__title">You may also be interested with these bad boys</h2>
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
