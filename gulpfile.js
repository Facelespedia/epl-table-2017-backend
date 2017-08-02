var elixir = require('laravel-elixir');
var del = require('del');

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
elixir.extend('remove', function(path) {
    new elixir.Task('remove', function() {
        del(path);
    });
});


elixir(function(mix) {
    mix.remove([ 'public/css', 'public/images', 'public/js', 'public/fonts' ]);
    mix.sass('app.scss');
    mix.copy('resources/assets/images', 'public/images');
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/');
    mix.copy('node_modules/font-awesome/fonts/', 'public/fonts');
    mix.scripts(['config.js'], 'public/js/config.js')
    .scripts(['jquery.min.js'], 'public/js/jquery.min.js')
    .scripts(['admin.js', 'admin-match.js'], 'public/js/admin.js')
});
