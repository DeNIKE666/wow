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
mix.copy('resources/assets/wow/fonts' , 'public/assets/fonts')


mix.styles([
    'resources/css/atlantis/bootstrap.min.css',
    'resources/css/atlantis/atlantis.css',
    'resources/css/atlantis/fonts.css',
], 'public/assets/atlantis.css').version();


mix.scripts([
    'resources/js/atlantis/core/jquery.3.2.1.min.js',
    'resources/js/atlantis/core/bootstrap.min.js',
    'resources/js/atlantis/core/popper.min.js',
    'resources/js/atlantis/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
    'resources/js/atlantis/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
    'resources/js/atlantis/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
    'resources/js/atlantis/plugin/moment/moment.min.js',
    'resources/js/atlantis/plugin/chart-js/chart.min.js',
    'resources/js/atlantis/plugin/jquery.sparkline/jquery.sparkline.min.js',
    'resources/js/atlantis/plugin/chart-circle/circles.min.js',
    'resources/js/atlantis/plugin/datatables/datatables.min.js',
    'resources/js/atlantis/plugin/bootstrap-notify/bootstrap-notify.min.js',
    'resources/js/atlantis/plugin/bootstrap-toggle/bootstrap-toggle.min.js',
    'resources/js/atlantis/plugin/jqvmap/jquery.vmap.min.js',
    'resources/js/atlantis/plugin/jqvmap/maps/jquery.vmap.world.js',
    'resources/js/atlantis/plugin/dropzone/dropzone.min.js',
    'resources/js/atlantis/plugin/fullcalendar/fullcalendar.min.js',
    'resources/js/atlantis/plugin/datepicker/bootstrap-datetimepicker.min.js',
    'resources/js/atlantis/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
    'resources/js/atlantis/plugin/bootstrap-wizard/bootstrapwizard.js',
    'resources/js/atlantis/plugin/jquery.validate/jquery.validate.min.js',
    'resources/js/atlantis/plugin/summernote/summernote-bs4.min.js',
    'resources/js/atlantis/plugin/select2/select2.full.min.js',
    'resources/js/atlantis/plugin/sweetalert/sweetalert.min.js',
    'resources/js/atlantis/plugin/owl-carousel/owl.carousel.min.js',
    'resources/js/atlantis/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js',
], 'public/assets/atlantis.all.js').version();

mix.copy('resources/js/atlantis/atlantis.min.js', 'public/assets');

mix.copy('resources/assets/atlantis/fonts', 'public/assets/fonts')
mix.copy('resources/assets/atlantis/img', 'public/img/admin')
