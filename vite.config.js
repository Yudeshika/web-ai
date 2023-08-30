import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/extra/jquery.min.js', 
                'resources/js/extra/bootstrap.bundle.min.js', 
                'resources/js/extra/jquery.sticky.js', 
                'resources/js/extra/waypoints.min.js', 
                'resources/js/extra/jquery.counterup.min.js', 
                'resources/js/extra/owl.carousel.min.js', 
                'resources/js/extra/slick.min.js', 
                'resources/js/extra/isotope.pkgd.min.js', 
                'resources/js/extra/jquery.magnific-popup.min.js', 
                'resources/js/extra/jquery.meanmenu.min.js', 
                'resources/js/extra/kids.js', 
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
