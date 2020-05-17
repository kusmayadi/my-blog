const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
let tailwind = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./tailwind.config.js')
        ]
    })
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'source/assets/build/webfonts')
    .version();
