const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.scripts([
	'resources/assets/js/site/vendor/jquery-2.1.1.js',
	'resources/assets/js/site/vendor/materialize.js',
	'resources/assets/js/site/vendor/modernizr.custom.28468.js',
	'resources/assets/js/site/vendor/nouislider.js',
	'resources/assets/js/site/vendor/wNumb.js',
	'resources/assets/js/site/vendor/jquery.bxslider.js',
	'resources/assets/js/site/vendor/jquery.validate.js',
	'resources/assets/js/site/vendor/messages_es_PE.js',
	'resources/assets/js/site/public.js'
], 'public/assets/site/js/public.js');

mix.styles('resources/assets/css/site/*.css', 'public/assets/site/css/vendor.css');
mix.sass('resources/assets/sass/site/public.scss', 'public/assets/site/css');