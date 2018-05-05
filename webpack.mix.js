let mix = require('laravel-mix');

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
	'resources/assets/js/jquery.min.js',
	'resources/assets/js/materialize.min.js',
	'resources/assets/js/jquery.dataTables.min.js',
	'resources/assets/js/jquery.mask.min.js',
	'resources/assets/js/jquery.maskMoney.min.js',
	'resources/assets/js/main.js',
	'resources/assets/js/init.js',
	'resources/assets/js/app.js'

	], 'public/js/app.js')
   .styles([
   	'resources/assets/css/materialize.min.css',
   	'resources/assets/css/dataTables.materialize.css',
   	'resources/assets/css/material-icons.css',
   	'resources/assets/css/main.min.css',
   	'resources/assets/css/fonts.css',
   	'resources/assets/css/style.css',
   	'resources/assets/css/app.css'

   	], 'public/css/app.css');
