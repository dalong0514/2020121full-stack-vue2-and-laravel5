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
require('dotenv').config();
const mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/testapp.js', 'public/js')
    .styles([
        'node_modules/open-sans-all/css/open-sans.css',
        'node_modules/font-awesome/css/font-awesome.css',
        'resources/assets/sass/app.scss'
    ], 'public/css/app.css')
    .copy('node_modules/open-sans-all/fonts', 'public/fonts')
    .copy('node_modules/font-awesome/fonts', 'public/fonts')
    .copy('resources/assets/images', 'public/images');

mix.options({
    extractVueStyles: "public/css/vue-style.css"
});

// mix.webpackConfig({
//     resolve: {
//         alias: {
//             'vue$': 'vue/dist/vue.runtime.esm.js'
//         }
//     }
// });
