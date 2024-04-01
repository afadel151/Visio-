import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resource/js/mark-absence.ts',
                'resource/js/dashboard.js',
                // 'resource/js/deletetd.ts',
                // 'resources/css/insertsession.css'
            ],
            refresh: true,
        }),
    ],
});
