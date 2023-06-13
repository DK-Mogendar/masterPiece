

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/tailwind.css', 'public/css', [
       require('tailwindcss'),
   ]);
   
/*const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
       processCssUrls: false,
       postCss: [tailwindcss('./tailwind.config.js')]
   }).disableNotifications();

if (mix.inProduction()) {
    mix.version();
}*/