import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    /*
    server: {
        https: true
    },
    base: '/'   */
});


/*
export default defineConfig(({ command, mode, ssrBuild }) => {
    if (command === 'build') {
      return {
        // production-specific config
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ],
        server: {
            https: true
        },
        base: '/' 
      }
    } else {
      return {
        // dev-specific config
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ]
      }
    }
})*/

