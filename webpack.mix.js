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

mix.js([
    // 'resources/js/theme/plugin/webfont/webfont.min.js',
    // 'resources/js/theme/core/jquery.3.2.1.min.js',
    // 'resources/js/theme/core/popper.min.js',
    // 'resources/js/theme/core/bootstrap.min.js',
    // 'resources/js/theme/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
    // 'resources/js/theme/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
    // 'resources/js/theme/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
    // 'resources/js/theme/plugin/datatables/datatables.min.js',
    // 'resources/js/theme/plugin/bootstrap-notify/bootstrap-notify.min.js',
    // 'resources/js/theme/plugin/sweetalert/sweetalert.min.js',
    // 'resources/js/theme/atlantis.min.js',
    'resources/js/app.js'
], 'public/js/app.js')
    .sass('resources/sass/app.scss','public/css/app.css');

