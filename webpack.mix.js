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


// Web
mix.js('resources/assets/js/web/web.js', 'public/js');
mix.sass('resources/assets/sass/web/web.sass', 'public/css')
.options({
    processCssUrls: false,
    outputStyle: 'compressed'
});


// Vadmin 
//mix.js('resources/assets/js/vadmin-ui.js', 'public/js')
//.js('resources/assets/js/vadmin-functions.js', 'public/js')
//.js('resources/assets/js/vadmin-forms.js', 'public/js');

mix.combine([
    'resources/assets/js/vadmin-ui.js',
    'resources/assets/js/vadmin-functions.js',
],  'public/js/vadmin.js');

mix.js('resources/assets/js/vadmin-forms.js', 'public/js');

mix.sass('resources/assets/sass/vadmin/vadmin.sass', 'public/css')
.options({
    processCssUrls: false,
    outputStyle: 'compressed'
});
