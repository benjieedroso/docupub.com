import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap' : path.resolve(__dirname, 'node_modules/bootstrap'),
            '~chartjs': path.resolve(__dirname, 'vendor/chart.js'),
            '~jquery': path.resolve(__dirname, 'vendor/jquery')
        }
    }
});
