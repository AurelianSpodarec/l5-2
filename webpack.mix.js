const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */


mix.setPublicPath(`./public`).browserSync({
    notify: false,
    ui: false,
    open: false,
})
   


mix.sass(`resources/styles/app.scss`, `styles`).options({
    processCssUrls: false,
    postCss: [require(`tailwindcss`)(`resources/styles/tailwind.config.js`)],
})


mix
    .js('resources/scripts/app.js', 'scripts')
    .js('resources/scripts/customizer.js', 'scripts')
    .extract();


// mix
//   .copyDirectory('resources/images', 'public/images')
//   .copyDirectory('resources/fonts', 'public/fonts');

mix
  .sourceMaps()
  .version();

