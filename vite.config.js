import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/images/logo-fin.svg',
                'resources/images/bg-mobile.webp',
                'resources/images/bg-desktop.webp',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
