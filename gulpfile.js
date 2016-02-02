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
var assetDir = 'resources/assets/';
var js_output_dir = 'public/static/js/';
var css_output_dir = 'public/static/css/';

//elixir(function (mix) {
//    mix.scripts([
//        "common.js"
//    ], js_output_dir + 'app.js');
//});

//后台common css
elixir(function (mix) {
    mix.styles([
        "app.css"
    ], css_output_dir + 'admin-app.css');
});

//后台common js
elixir(function (mix) {
    mix.scripts([
        "app.js"
    ], js_output_dir + 'admin-app.js');
});


