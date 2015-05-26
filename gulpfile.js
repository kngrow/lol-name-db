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

elixir(function(mix) {
    mix.less('app.less');
});
var jsOutput = elixir.config.jsOutput;
var bowerDir = elixir.config.bowerDir;
var assetsDir = elixir.config.assetsDir;
var paths = {
  foundation : bowerDir+'/foundation/'
};

gulp.task('bower',function(){
  return bower.commands.install([],{save:true},{})
    on('end',function(data){
      console.log(data);
    });
});
