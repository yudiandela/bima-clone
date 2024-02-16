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
            keyframes: {
                wiggle: {
                    '0%, 80%, 100%': { transform: 'rotate(0deg) scale(1)' },
                    '85%': { transform: 'rotate(25deg) scale(1.2)' },
                    '95%': { transform: 'rotate(-25deg) scale(1.2)' },
                }
            },
            animation: {
                wiggle: 'wiggle 2s infinite ',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
