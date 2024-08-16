import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/planet-bsb.css',
                'resources/css/planet-bsb.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/planet-bsb.js'

            ],
            refresh: true,
        }),
    ],
});
