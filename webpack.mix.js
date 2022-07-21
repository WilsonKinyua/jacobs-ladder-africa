const mix = require("laravel-mix");

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
mix.styles(
    [
        "public/css/bootstrap.css",
        "public/css/navigation.css",
        "public/css/main.css",
        "public/css/responsive.css",
        "public/css/slick.min.css",
        "public/css/owl.carousel.min.css",
        "public/css/owl.theme.default.min.css",
    ],
    "public/css/main.min.css"
).browserSync("127.0.0.1:8000");
