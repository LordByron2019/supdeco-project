const mix = require('laravel-mix');



mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/main.scss', 'public/css')
    .sass('resources/scss/bootstrap.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        // require("tailwindcss"),
    ]);
