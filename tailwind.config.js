const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'hfred': '#ff6967',
                'hfgray': {
                    DEFAULT: '#2f364b',
                    light: '#e2e2e2',
                    medium: '#afafaf',
                },
                'hfblue': {
                    DEFAULT: '#60a5fa',
                    light: '#bde6f4',
                    dark: '#387bd9',
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
