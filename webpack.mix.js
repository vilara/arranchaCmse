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

    .version();

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
