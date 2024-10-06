import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        {
            pattern: /bg-(red|blue|green|yellow|orange|purple|pink)-(100|200|300|400|500|600|700|800|900)/,
        },
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'hippie-blue': {
                    '50': '#f1f8fa',
                    '100': '#dcecf1',
                    '200': '#bedae3',
                    '300': '#90bed0',
                    '400': '#6ca5bc',
                    '500': '#407f9a',
                    '600': '#386982',
                    '700': '#33566b',
                    '800': '#30495a',
                    '900': '#2c3f4d',
                    '950': '#192833',
                },
            },
        },
    },

    plugins: [forms, typography],
};
