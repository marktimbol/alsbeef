var elixir = require('laravel-elixir');
var bowersPath = '../../../bower_components/';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
    		bowersPath + 'bootstrap/dist/css/bootstrap.css',
    		'app.css',
    	], 'public/css/app.css')

    	.scripts([
    		bowersPath + 'jquery/dist/jquery.js',
    		bowersPath + 'bootstrap/dist/js/bootstrap.js'
    	], 'public/js/app.js')

        .scripts([
            bowersPath + 'covervid/covervid.min.js',
            'Video.js'
        ], 'public/js/video.js')

        .scripts([
            bowersPath + 'typeahead.js/dist/typeahead.jquery.js',
        ], 'public/js/typeahead.js')

        .browserify('Menus.js')

    	.copy('bower_components/bootstrap/dist/fonts', 'public/build/fonts')

    	.version([
    		'public/css/app.css',
            'public/js/app.js',

    		'public/js/typeahead.js',
            'public/js/video.js',

    	]);
});
