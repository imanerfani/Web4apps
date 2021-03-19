const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    //'resources/lib/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    //'resources/lib/sweetalert2/sweetalert2.min.css',
    //'resources/lib/summernote/summernote-bs4.min.css'
],'public/css/app.css')
    .version();

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popperjs/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/fortawesome/fontawesome-free/js/all.min.js',
    //'resources/lib/sweetalert2/sweetalert2.min.js',
    //'resources/lib/summernote/summernote-bs4.min.js'
],'public/js/app.js')
    .version();
