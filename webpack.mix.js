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
    'resources/css/admin/vendors/mdi/css/materialdesignicons.min.css',
    'resources/css/admin/vendors/css/vendor.bundle.base.css',
    'resources/css/admin/vendors/jvectormap/jquery-jvectormap.css',
    'resources/css/admin/vendors/flag-icon-css/css/flag-icon.min.css',
    'resources/css/admin/vendors/owl-carousel-2/owl.carousel.min.css',
    'resources/css/admin/vendors/owl-carousel-2/owl.theme.default.min.css',
    'resources/css/admin/css/style.css'
    
], 'public/css/admin_styles.css');



mix.scripts([
    'resources/js/admin/vendors/chart.js/Chart.min.js',
    'resources/js/admin/vendors/progressbar.js/progressbar.min.js',
    'resources/js/admin/vendors/jvectormap/jquery-jvectormap.min.js',
    'resources/js/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js',
    'resources/js/admin/vendors/owl-carousel-2/owl.carousel.min.js',
    'resources/js/admin/js/off-canvas.js',
    'resources/js/admin/js/hoverable-collapse.js',
    'resources/js/admin/js/misc.js',
    'resources/js/admin/js/settings.js',
    'resources/js/admin/js/todolist.js',
    'resources/js/admin/js/dashboard.js'

], 'public/js/admin_script.js');
