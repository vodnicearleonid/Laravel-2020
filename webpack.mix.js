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

/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/
mix.styles([
    'resources/front/css/bootstrap.css',
    'resources/front/css/main.css'
], 'public/css/styles.css');

mix.scripts([
    'resources/front/js/jquery-3.5.1.slim.js',
    'resources/front/js/bootstrap.js'
], 'public/js/scripts.css');

mix.copyDirectory('resources/front/img', 'public/img');

mix.browserSync('127.0.0.1:800');
