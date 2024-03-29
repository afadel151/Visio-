import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.ts',
                'resource/js/mark-absence.ts',
                'resource/js/dashboard.ts',
                'resources/css/insertsession.css'
            ],
            refresh: true,
        }),
    ],
});
