import { mix } from "laravel-mix/src/File";

mix.js("resources/js/app.js", "public/js").postcss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
