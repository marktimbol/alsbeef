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
                    <h2 class="Page__header--title">Contact Us</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row Page__content">
                    <div class="col-md-9">
                        <h3 class="Page__subtitle">General Inquiries</h3>
                        <p class="lead">
                           We welcome your suggestions. Please send us your questions, feedback and comments.
                        </p>
                        <form method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" 
                                    id="name" class="form-control"
                                    placeholder="Full Name" />
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" 
                                    id="phone" class="form-control"
                                    placeholder="+971 00 000 0000" />
                            </div>                  

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" 
                                    id="email" class="form-control"
                                    placeholder="your@email.com" />
                            </div>


                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message_content" 
                                    id="message" class="form-control" rows="10">
                                </textarea>
                            </div>
                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Send
                                </button>
                                <button type="reset" class="btn btn-default btn-lg">
                                    Clear
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>  
        </div>
    </div>
    
@endsection
