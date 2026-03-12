import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // Definir ruta para buscar build
    base: './',

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
