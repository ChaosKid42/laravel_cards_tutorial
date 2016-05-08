var elixir = require('laravel-elixir');

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
    mix.sass('app.scss')
    .copy('bower_components/bootstrap-sass/assets/fonts', 'public/build/fonts')
    .copy('bower_components/font-awesome/fonts', 'public/build/fonts')
    .copy('bower_components/lato/font', 'public/build/font')
	.scripts([
		'../../../bower_components/jquery/dist/jquery.js',
		'../../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.js'
	], 'public/js/app.js')
    .version([ 'css/app.css', 'js/app.js' ])
    .browserSync({
        proxy: 'localhost:8000'
    });
});



