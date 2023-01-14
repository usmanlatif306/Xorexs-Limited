const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();
mix.styles(
    [
        "public/theme/animate.css",
        "public/theme/owl.carousel.min.css",
        "public/theme/owl.theme.default.min.css",
        "public/theme/magnific-popup.css",
        "public/theme/flaticon.css",
        "public/theme/style.css",
        "public/theme/custom.css",
    ],
    "public/css/style.css"
);
