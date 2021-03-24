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
    'node_modules/sweetalert2/dist/sweetalert2.min.css',
    //'node_modules/admin-lte/dist/css/adminlte.min.css',
    'public/lib/rtl/adminlte/adminlte.css',
    'public/lib/rtl/adminlte/custom.css'
    //'resources/lib/summernote/summernote-bs4.min.css'
],'public/css/admin/app.css')
    .version();

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popperjs/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.min.js',
    'node_modules/admin-lte/dist/js/adminlte.min.js',
    //'resources/lib/summernote/summernote-bs4.min.js'
],'public/js/admin/app.js')
    .version();



mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    //'resources/lib/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'node_modules/sweetalert2/dist/sweetalert2.min.css',
    //'resources/lib/summernote/summernote-bs4.min.css'
],'public/css/website/app.css')
    .version();

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popperjs/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/sweetalert2/dist/sweetalert2.min.js',
    //'resources/lib/summernote/summernote-bs4.min.js'
],'public/js/website/app.js')
    .version();
