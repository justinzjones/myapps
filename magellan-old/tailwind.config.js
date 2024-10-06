import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            textShadow: {
                sm: '0 1px 2px var(--tw-shadow-color)',
                DEFAULT: '0 2px 4px var(--tw-shadow-color)',
                lg: '0 8px 16px var(--tw-shadow-color)',
            },

            colors: {
                'lily-white': {
                    '50': '#eaf8fc',
                    '100': '#d5eff8',
                    '200': '#b0dff1',
                    '300': '#79c7e7',
                    '400': '#3ba6d5',
                    '500': '#208aba',
                    '600': '#1d6e9d',
                    '700': '#1e5a80',
                    '800': '#214c69',
                    '900': '#204059',
                    '950': '#0f283d',
                },
                
            },
        },
    },

    plugins: 
        [
            plugin(function ({ matchUtilities, theme }) {
                matchUtilities(
                    {
                        'text-shadow': (value) => ({
                        textShadow: value,
                        }),
                    },

                    { values: theme('textShadow') }
                )
            }),

            forms, typography,
        ],
};
