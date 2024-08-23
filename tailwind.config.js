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
                'gold': '#FFD700', // Optional lighter gold color
                'black': 'rgb(28, 28, 28)', // Custom black color
                gg: '#222'
            },
            rotate: {
                '270': '270deg',
              },
        },
    },

    plugins: [forms],
};
