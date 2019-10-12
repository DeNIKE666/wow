const mix = require('laravel-mix');

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

//mix.js('resources/js/app.js', 'public/js')
  //  .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/wow/css/stylesheet.css',
    'resources/assets/wow/css/animate.css',
    'resources/assets/wow/css/bootstrap.css',
    'resources/assets/wow/css/common.css',
    'resources/assets/wow/css/jquery.fancybox.min.css',
    'resources/assets/wow/css/slick.css',
] , 'public/assets/wow.css').version();

mix.copy('resources/assets/wow/img' , 'public/img')
mix.copy('resources/assets/wow/fonts' , 'public/fonts')
