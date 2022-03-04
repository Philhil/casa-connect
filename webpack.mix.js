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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])
    .vue({ version: 2 })
    .copy('resources/css/default.css', 'public/css')
    .copy(
    'node_modules/@fortawesome/fontawesome-free/webfonts',
    'public/webfonts'
    )
    .copy('resources/img', 'public/img');

mix.copy('vendor/creativetimofficial/vue-soft-ui-dashboard/public/assets', 'public/assets');