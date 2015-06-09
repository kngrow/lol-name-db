var elixir = require('laravel-elixir');
var gulp = require('gulp');
var bower = require('bower');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix){
  mix.copy('node_modules/foundation/scss','resources/assets/sass/foundation')
  .sass('resources/assets/sass/style.scss')
  .copy('node_modules/foundation/js','resources/assets/js/foundation')
    .scripts([
      'foundation/vendor/jquery.js',
      'foundation/foundation/foundation.js',
      'app.js'
    ] , 'public/js/app.js','resources/assets/js')
    .version(['css/style.css','js/app.js']);
});
