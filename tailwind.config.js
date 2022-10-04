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
            screens: {
                sm: "540px",
                // => @media (min-width: 576px) { ... }
          
                md: "720px",
                // => @media (min-width: 768px) { ... }
          
                lg: "960px",
                // => @media (min-width: 992px) { ... }
          
                xl: "1140px",
                // => @media (min-width: 1200px) { ... }
          
                "2xl": "1320px",
                // => @media (min-width: 1400px) { ... }
            },
            container: {
                center: true,
                padding: "16px",
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
                },
                black: "#212b36",
                dark: "#090E34",
                "dark-700": "#090e34b3",
                primary: "#3056D3",
                secondary: "#13C296",
                "body-color": "#637381",
                warning: "#FBBF24",
            },
            boxShadow: {
                input: "0px 7px 20px rgba(0, 0, 0, 0.03)",
                pricing: "0px 39px 23px -27px rgba(0, 0, 0, 0.04)",
                "switch-1": "0px 0px 5px rgba(0, 0, 0, 0.15)",
                testimonial: "0px 60px 120px -20px #EBEFFD",
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
