/**
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const mix = require("laravel-mix");

mix.disableNotifications();

/** Vendor */
mix.sass("resources/assets/sass/admin.scss", "public/vendor/css/", {
  sassOptions: {
    outputStyle: "compressed" /* nested, expanded, compact, compressed */,
    processCssUrls: true,
  },
});
mix.sass("resources/assets/sass/app.scss", "public/vendor/css/", {
  sassOptions: {
    outputStyle: "compressed" /* nested, expanded, compact, compressed */,
    processCssUrls: true,
  },
});
mix.js("resources/assets/js/admin.js", "public/vendor/js/");
mix.js("resources/assets/js/app.js", "public/vendor/js/");
mix.copy("node_modules/ckeditor4/", "public/vendor/ckeditor4/");
mix.copy(
  "node_modules/bs-custom-file-input/",
  "public/vendor/bs-custom-file-input/"
);
/** Global */
mix.options({
  postCss: [require("autoprefixer")]
});
mix.version();
