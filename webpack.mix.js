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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js')
    .copy('node_modules/datatables.net-bs/css/dataTables.bootstrap.css', 'public/css')
    .js('node_modules/datatables.net-bs/js/dataTables.bootstrap.js', 'public/js')
    .js('node_modules/datatables.net-buttons/js/buttons.colVis.js', 'public/js')
    .js('node_modules/datatables.net-buttons/js/buttons.flash.js', 'public/js')
    .js('node_modules/datatables.net-buttons/js/buttons.html5.js', 'public/js')
    .js('node_modules/datatables.net-buttons/js/buttons.print.js', 'public/js')
    .js('node_modules/datatables.net-buttons/js/dataTables.buttons.js', 'public/js')
    .copy('node_modules/datatables.net-buttons-bs/css/buttons.bootstrap.css', 'public/css')
    .js('node_modules/datatables.net-buttons-bs/js/buttons.bootstrap.js', 'public/js');