const mix = require('laravel-mix');
const path = require('path');

// Configure the output paths for compiled assets
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .webpackConfig({
       resolve: {
           alias: {
               '@': path.resolve(__dirname, 'resources/js'),
           },
       },
   })
   .version(); // Add versioning for cache busting