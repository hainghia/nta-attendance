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

mix.js('resources/assets/js/app.js', 'public/assets/js')
mix.postCss('resources/assets/css/app.css', 'public/assets/css/', [require('postcss-import'), require('tailwindcss'),])



mix.sass("resources/assets/scss/app.scss", "public/assets/css/root.css")
  .sass('resources/assets/scss/pages/home.scss', 'public/assets/css/pages')
  .sass('resources/assets/scss/pages/auth.scss', 'public/assets/css/pages')
  .options({
    processCssUrls: false,
  });
mix.copy("node_modules/bootstrap-icons/font/fonts", "public/assets/css/fonts")
  .copy("node_modules/@fortawesome/fontawesome-free/webfonts", "public/assets/css/fonts")
  .copy("node_modules/apexcharts/dist/apexcharts.min.js", "public/assets/js")
  .copy("node_modules/parsleyjs/dist/", "public/assets/js/parsleyjs")
  .copy("resources/assets/js/main.js", "public/assets/js/main.js")
  .copy("resources/assets/js/pages/", "public/assets/js/pages/")
// mix.copy("node_modules/ckeditor4/", "public/assets/ckeditor4/");

mix.copy('node_modules/flowbite/dist/flowbite.js', 'public/assets/js')

/** Global */
mix.options({
  postCss: [require("autoprefixer")]
});
/**
 * * In Production
 */
if (mix.inProduction()) {
  mix.version();
}
