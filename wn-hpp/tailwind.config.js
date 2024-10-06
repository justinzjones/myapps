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

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            borderWidth: {
                DEFAULT: '1px',
                '0': '0',
                '2': '2px',
                '3': '3px',
                '4': '4px',
                '6': '6px',
                '8': '8px',
            },

            colors: {
                'governor-bay': {
                    '50': '#f1f5fd',
                    '100': '#dfeafa',
                    '200': '#c7daf6',
                    '300': '#a0c2f0',
                    '400': '#73a2e7',
                    '500': '#5281df',
                    '600': '#3d65d3',
                    '700': '#304cb2',
                    '800': '#30449d',
                    '900': '#2b3c7d',
                    '950': '#1f274c',
                },
                'bay-of-many': {
                    '50': '#f0f5fe',
                    '100': '#dde8fc',
                    '200': '#c2d8fb',
                    '300': '#99c0f7',
                    '400': '#689ff2',
                    '500': '#457cec',
                    '600': '#2f5ee1',
                    '700': '#274bce',
                    '800': '#263ea7',
                    '900': '#233782',
                    '950': '#1a2451',
                },
        },
        
        
            
        }
    },

    plugins: [forms, typography],
};
