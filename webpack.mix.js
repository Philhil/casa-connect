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
    .sass('resources/sass/app.scss', 'public/scss')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .vue({ version: 2 })
    .copy('resources/img', 'public/img');

mix.copy('vendor/creativetimofficial/vue-soft-ui-dashboard/public/assets/css', 'public/assets/css');
mix.copy('vendor/creativetimofficial/vue-soft-ui-dashboard/public/assets/fonts', 'public/assets/fonts');
mix.copy('vendor/creativetimofficial/vue-soft-ui-dashboard/public/assets/js', 'public/assets/js');