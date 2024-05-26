import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resource/js/mark-absence.js',
                'resource/js/dashboard.js',
                'resources/css/insertsession.css'
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '@': '/resources/js',
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    }
});
