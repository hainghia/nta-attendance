const mix = require("laravel-mix");
mix.disableNotifications();
mix.js("resources/assets/js/app.js", "public/vendor/js/");
mix.sass("resources/assets/scss/app.scss", "public/vendor/css/")
    .sass('resources/assets/scss/pages/auth.scss', 'public/vendor/css/pages')
    .sass('resources/assets/scss/pages/error.scss', 'public/vendor/css/pages')
    .sass('resources/assets/scss/pages/email.scss', 'public/vendor/css/pages')
    .sass('resources/assets/scss/pages/chat.scss', 'public/vendor/css/pages')
    .sass('resources/assets/scss/widgets/chat.scss', 'public/vendor/css/widgets')
    .sass('resources/assets/scss/widgets/todo.scss', 'public/vendor/css/widgets')
    .options({
        processCssUrls: false,
    });
mix.copy("node_modules/bootstrap-icons/font/fonts", "public/vendor/css/fonts")
    .copy("node_modules/@fortawesome/fontawesome-free/webfonts", "public/vendor/css/fonts")
    .copy("node_modules/apexcharts/dist/apexcharts.min.js", "public/vendor/js")
    .copy("node_modules/parsleyjs/dist/", "public/vendor/js/parsleyjs")
// mix.copy("node_modules/ckeditor4/", "public/vendor/ckeditor4/");
