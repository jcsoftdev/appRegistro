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

mix.styles([

    'resources/assets/dataTables.bootstrap4.min.css',
    'resources/assets/buttons.bootstrap4.min.css',
    'resources/assets/responsive.bootstrap4.min.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/metismenu.min.css',
    'resources/assets/css/icons.css',
    'resources/assets/css/style.css',

], 'public/assets/css/plantilla.css')
    .scripts([
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/bootstrap.bundle.min.js',
        'resources/assets/js/jquery.slimscroll.js',

    ], 'public/js/plantillahead.js')
    .scripts([



        'resources/assets/js/jquery.min.js',
        'resources/assets/js/bootstrap.bundle.min.js',
        'resources/assets/js/jquery.slimscroll.js',
        'resources/assets/js/waves.min.js',


        'resources/assets/jquery.dataTables.min.js',
        'resources/assets/dataTables.bootstrap4.min.js',
        'resources/assets/dataTables.buttons.min.js',
        'resources/assets/buttons.bootstrap4.min.js',
        'resources/assets/jszip.min.js',
        'resources/assets/pdfmake.min.js',
        'resources/assets/vfs_fonts.js',
        'resources/assets/buttons.html5.min.js',
        'resources/assets/buttons.print.min.js',
        'resources/assets/buttons.colVis.min.js',
        'resources/assets/dataTables.responsive.min.js',
        'resources/assets/responsive.bootstrap4.min.js',
        'resources/assets/datatables.init.js',
        'resources/assets/js/app.js',

    ], 'public/js/plantilla.js')

    .js(['resources/js/app.js'], 'public/js/app.js');
