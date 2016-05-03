@extends('layouts.public')

@section('content')
    <div class="Page">
        <div id="Menus"></div>
    </div>
    
@endsection

@section('footer_scripts')
    <script src="{{ elixir('js/typeahead.js') }}"></script>
    <script src="/js/Menus.js"></script>
@endsection 
