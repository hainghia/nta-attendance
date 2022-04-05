const mix = require('laravel-mix');
mix.disableNotifications();
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
  ]);
///////////////////////////

// mix.js('resources/assets/js/app.js', 'public/assets/js/')
// mix.sass('resources/assets/sass/app.scss', 'public/assets/css/')
//   .sass('resources/assets/sass/pages/page-auth.scss', 'public/assets/css/pages')

// mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/assets/css/fonts')
//   .copy('node_modules/parsleyjs/dist/', 'public/assets/js/parsleyjs')
// // .copy('node_modules/bootstrap-icons/font/fonts', 'public/assets/css/fonts')



//   .copy('node_modules/apexcharts/dist/apexcharts.min.js', 'public/assets/js')

//   .copy('resources/assets/js/main.js', 'public/assets/js/main.js')
//   .copy('resources/assets/js/pages/', 'public/assets/js/pages/')
// mix.copy('node_modules/ckeditor4/', 'public/assets/ckeditor4/');

/** Global */
mix.options({
  processCssUrls: false,
  postCss: [require('autoprefixer')]
});
/**
 * * In Production
 */
if (mix.inProduction()) {
  mix.version();
}
