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
    .copy('node_modules/bootstrap-sass/assets/fonts', 'public/build/fonts')
    .copy('node_modules/font-awesome/fonts', 'public/build/fonts')
    .copy('node_modules/lato-font/fonts', 'public/build/fonts')
	.copy('vendor/caouecs/laravel-lang/src/de', 'resources/lang/de')
    .browserify('app.js')
    .version([ 'css/app.css', 'js/app.js' ])
    .browserSync({
        proxy: 'localhost:8000'
    });
});



