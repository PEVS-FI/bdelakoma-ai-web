import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/animate.css',
                'resources/css/bootstrap.min.css',
                'resources/css/flaticon.css',
                'resources/css/font-awesome.min.css',
                'resources/css/jquery.fancybox.css',
                'resources/css/magnific-popup.css',
                'resources/css/metisMenu.min.css',
                'resources/css/odometer-theme-default.css',
                'resources/css/owl.carousel.css',
                'resources/css/owl.theme.css',
                'resources/css/owl.transitions.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/style.css',
                'resources/css/themify-icons.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/fonts',
                    dest: 'fonts'
                }
            ]
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
