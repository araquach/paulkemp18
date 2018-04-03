var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'normalize.css',
        'pkstyles.css',
        'form.css'
    ], 'public/css/app.css');
    
    mix.styles([
        'mobile.css'
    ], 'public/css/mob.css');
    
    mix.styles([
        'normalize.css',
        'form.css',
        'prospect.css'
        
     ], 'public/css/prospect.css');
     
     mix.styles([
        'pros_mob.css'
     ], 'public/css/pros_mob.css');
     
    mix.scripts([
        'jquery.js',
        'feedback-feed.js',
        'feedback-feed-ind.js',
        'mobile-nav.js'
    ], 'public/scripts/jquery.js')
     
    .scripts([
        'mootools_core.js',
        'mootools-more.js'
    ],  'public/scripts/mootools.js')
     
    .scripts([
        'modernizr.js',
        'selectivizr-min.js'
    ], 'public/scripts/modernizr.js');
    
    mix.version([
        'public/css/app.css',
        'public/css/mob.css',
        'public/css/prospect.css',
        'public/css/pros_mob.css'
    ]);
});
