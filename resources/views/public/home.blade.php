@extends('layouts.public')

@section('content')
    <section class="Video">
        <video class="Video__item" autoplay loop muted poster="/videos/alsbeef.jpg">
            <source src="/videos/alsbeef.mp4" type="video/mp4">
            <source src="/videos/alsbeef.webm" type="video/webm">
        </video>
        
        <div class="Video__arrow"></div>

        <div class="Video__intro">
            <div class="Video__intro--content">
                <img src="/images/intro.png" alt="" title="" class="img-responsive" />
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row margin-top-20">
                @foreach( range(1,3) as $index)
                <div class="col-md-4 col-xs-12">
                    <div class="Card">
                        <div class="Card__image">
                            <img src="/images/promo.jpg" alt="" title="" class="img-responsive" />
                        </div>
                        <div class="Card__content">
                            <h3 class="Card__title">Loyalty Program</h3>
                            <p class="Card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>

                            <div class="Card__action">
                                <a href="#" class="btn btn-link">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row margin-top-20">
                <div class="col-md-12">
                    <div class="Card">
                        <div class="Card__image">
                            <img src="/images/diversity.jpg" alt="" title="" class="img-responsive" />
                        </div>
                        <div class="Card__content">
                            <h3 class="Card__title">Diversity</h3>
                            <p class="Card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>

                            <div class="Card__action">
                                <a href="#" class="btn btn-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('footer_scripts')
    <script src="{{ elixir('js/video.js') }}"></script>
@endsection	