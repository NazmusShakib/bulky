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

mix.js('resources/assets/js/app.js', 'public/js')
mix.js('resources/assets/js/v-app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'public/css/app.css',
    'resources/assets/css/app.css',
    'resources/assets/css/jquery-ui.css'
], 'public/css/app.css');


mix.browserSync('http://app.bulk.dev');
