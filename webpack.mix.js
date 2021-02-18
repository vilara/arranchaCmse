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

 mix.
    styles(['resources/views/site/css/style.css','resources/views/site/css/reset.css'], 'public/site/css/style.css')

    .scripts(['resources/views/site/js/scripts.js'], 'public/site/js/scripts.js')

    .styles(['resources/views/admin/css/style.css'], 'public/admin/css/style.css')

    .scripts(['resources/views/admin/js/scripts.js'], 'public/admin/js/scripts.js')

    .scripts(['node_modules/jquery/dist/jquery.js'], 'public/site/js/jquery.js')

    .scripts(['node_modules/bootstrap/dist/js/bootstrap.bundle.js'], 'public/site/js/bootstrap.js')

    .sass('resources/views/scss/style.scss', 'public/site/css/bootstrap.css')

    .version();

/* mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css'); */
