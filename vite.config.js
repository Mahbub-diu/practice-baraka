import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/css/scss/style.scss', 'public/frontend/assets/scss/style.css'],
            input: ['resources/css/scss/responsive.scss', 'public/frontend/assets/scss/responsive.css'],
            input: ['resources/css/scss/slick.scss', 'public/frontend/assets/scss/slick.css'],
            input: ['resources/css/scss/slick-theme.scss', 'public/frontend/assets/scss/slick-theme'],
            refresh: true,
        }),
    ],
});
