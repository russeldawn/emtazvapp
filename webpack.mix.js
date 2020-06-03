require('dotenv').config();
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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bideo.js', 'public/js')
    .js('resources/js/main.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/images', 'public/images')
    .extract(['vue'])
    .sourceMaps();



mix.options({ extractVueStyles: 'public/css/vue-style.css' });

mix.webpackConfig({
  resolve: {
    alias: { 'vue$': 'vue/dist/vue.runtime.esm.js' }
  }
});
