let mix = require('laravel-mix');

mix.styles([
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/normalize.css',
    'resources/assets/css/transition-animations.css',
    'resources/assets/css/owl.carousel.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/pe-icon-7-stroke.css',
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/main.css',
], 'public/css/app.css').version();


mix.scripts([
    'resources/assets/js/jquery-2.1.3.min.js',
    'resources/assets/js/modernizr.custom.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/page-transition.js',
    'resources/assets/js/imagesloaded.pkgd.min.js',
    'resources/assets/js/jquery-validation.min.js',
    'resources/assets/js/jquery.shuffle.min.js',
    'resources/assets/js/masonry.pkgd.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/jquery.hoverdir.js',
    'resources/assets/js/main.js',

], 'public/js/app.js').version();


// Move Assets
mix.copy('resources/assets/fonts', 'public/fonts');
mix.copy('resources/assets/images', 'public/images');
mix.copy('resources/assets/downloads', 'public/downloads');


