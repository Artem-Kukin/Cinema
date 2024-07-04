import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/admin/css/normalize.css",
                "resources/admin/css/styles.css",
                "resources/admin/js/accordeon.js",
                "resources/client/css/normalize.css",
                "resources/client/css/styles.css",                
            ],
            refresh: true,
        }),
    ],
});
