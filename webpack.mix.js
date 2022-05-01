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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();


mix.styles([
    'resources/css/admin/css/font-face.css',
    'resources/css/admin/vendor/font-awesome-4.7/css/font-awesome.min.css',
    'resources/css/admin/vendor/font-awesome-5/css/fontawesome-all.min.css',
    'resources/css/admin/vendor/mdi-font/css/material-design-iconic-font.min.css',
    'resources/css/admin/vendor/bootstrap-4.1/bootstrap.min.css',
    'resources/css/admin/vendor/animsition/animsition.min.css',
    'resources/css/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
    'resources/css/admin/vendor/wow/animate.css',
    'resources/css/admin/vendor/css-hamburgers/hamburgers.min.css',
    'resources/css/admin/vendor/slick/slick.css',
    'resources/css/admin/vendor/select2/select2.min.css',
    'resources/css/admin/vendor/perfect-scrollbar/perfect-scrollbar.css',
    'resources/css/admin/css/theme.css'

], 'public/css/admin_styles.css');



mix.scripts([
    'resources/js/admin/vendor/jquery-3.2.1.min.js',
    'resources/js/admin/vendor/bootstrap-4.1/popper.min.js',
    'resources/js/admin/vendor/bootstrap-4.1/bootstrap.min.js',
    'resources/js/admin/vendor/slick/slick.min.js',
    'resources/js/admin/vendor/animsition/animsition.min.js',
    'resources/js/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
    'resources/js/admin/vendor/counter-up/jquery.waypoints.min.js',
    'resources/js/admin/vendor/counter-up/jquery.counterup.min.js',
    'resources/js/admin/vendor/circle-progress/circle-progress.min.js',
    'resources/js/admin/vendor/perfect-scrollbar/perfect-scrollbar.js',
    'resources/js/admin/vendor/chartjs/Chart.bundle.min.js',
    'resources/js/admin/vendor/select2/select2.min.js',
    'resources/js/admin/js/main.js',

], 'public/js/admin_script.js');
