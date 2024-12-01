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
                'san-felix': {
                    '50': '#ecfff0',
                    '100': '#d2ffe0',
                    '200': '#a8ffc2',
                    '300': '#65ff95',
                    '400': '#1bff5e',
                    '500': '#00f939',
                    '600': '#00d02b',
                    '700': '#00a225',
                    '800': '#007e22',
                    '900': '#00661f',
                    '950': '#003b0f',
                },
                'gable-green': {
                    '50': '#f3faf8',
                    '100': '#d8efec',
                    '200': '#b1ded8',
                    '300': '#82c6c0',
                    '400': '#58a9a4',
                    '500': '#3e8e8a',
                    '600': '#30716f',
                    '700': '#2a5b5b',
                    '800': '#25494a',
                    '900': '#1e3737',
                    '950': '#0f2424',
                },
    
    
            },
        },
    },

    plugins: [forms, typography],
};
