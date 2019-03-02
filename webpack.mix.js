let mix = require('laravel-mix');

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
    'resources/assets/css/fonts/fonts.css',
    'resources/assets/css/normalize.css',
    'resources/assets/css/pkstyles.css',
    'resources/assets/css/form.css'
], 'public/css/app.css');

mix.styles([
    'resources/assets/css/mobile.css'
], 'public/css/mob.css');

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/feedback-feed.js',
    'resources/assets/js/feedback-feed-ind.js',
    'resources/assets/js/mobile-nav.js'
], 'public/scripts/jquery.js');

mix.scripts([
    'resources/assets/js/mootools-core.js',
    'resources/assets/js/mootools-more.js'
], 'public/scripts/mootools.js');


