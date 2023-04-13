const mix = require("laravel-mix");

mix.styles(
    [
        "resources/css/app/bootstrap-min.css",
        "resources/css/app/bootstrap-extension.css",
        "resources/css/app/sidebar-nav.min.css",
        "resources/css/app/style.css",
        "resources/css/app/megna-dark.css",
    ],
    "public/"
);
