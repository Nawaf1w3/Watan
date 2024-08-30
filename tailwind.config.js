import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gold: '#FFD700', // Customize the gold color as needed
                'gold': '#f5b754', // Optional lighter gold color
                'black': '#1b1b1b', // Custom black color
                'light_black': '#1b1b1b',
                gg: '#222',
                'black-dark': '#000000',
            },
            rotate: {
                '270': '270deg',
            },
            keyframes: {
                moveRight: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(4px)' },
                },
            },
            animation: {
                'move-right': 'moveRight 0.3s ease-in-out forwards',
              },
              screens: {
                'sm-700': { 'max': '700px' }, // Custom breakpoint for 700px and smaller
              },
              fontSize: {
                'sm-0.7rem': '0.7rem', // Custom font-size
              },
              lineHeight: {
                'sm-1.0rem': '1.0rem', // Custom line-height
              },
        },
    },

    plugins: [forms],
};
