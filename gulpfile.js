var elixir = require('laravel-elixir');
require('laravel-elixir-bower');

/*
 |----------------------------------------------------------------
 | Have a Drink!
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

elixir(function(mix) {
    mix.less("bootstrap.less")
       .bower()
       .routes()
       .events()
       .phpUnit();
});
