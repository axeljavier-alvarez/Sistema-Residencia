import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // Definir ruta para buscar build
    base: '/ConstanciaResidencia/public/build/',

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    // 2. OPCIONAL: Si sigues teniendo problemas con fuentes o imágenes,
    // ayuda a Vite a resolver las rutas relativas.
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
