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
                gg: '#222'
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
        },
    },

    plugins: [forms],
};
