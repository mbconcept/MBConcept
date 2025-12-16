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
                'resources/images/logo-carré-v2.png',
                'resources/images/bg-mobile.webp',
                'resources/images/bg-desktop.webp',
                'resources/images/renovation-part.webp',
                'resources/images/renovation-part2.webp',
                'resources/images/renovation-part3.webp',
                'resources/images/renovation-pro.webp',
                'resources/images/renovation-pro2.webp',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
