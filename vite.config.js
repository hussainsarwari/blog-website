import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/owl-carousel.css',
                'resources/css/style.css',
                'resources/css/style2.css',
                'resources/css/templatemo-art-factory.css',
                'resources/js/pdf_editor.js',
                'resources/js/app.js',
                'resources/js/text_editor.js',
            ],
            refresh: true,
        }),

        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],

    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
