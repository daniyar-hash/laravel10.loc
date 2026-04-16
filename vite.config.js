import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/main.css', 'resources/bootstrap/bootstrap.css', 
                'resources/bootstrap/bootstrap.bundle.js' ],
            refresh: true,
        }),
    ],
    server: {
            host: '127.0.0.1',
            port: 5173,
            strictPort: true,
            hmr: {
                host: 'laravel10.loc', // ВАЖНО
            },

            cors: {
                origin: 'http://laravel10.loc',
            },
        },



});
