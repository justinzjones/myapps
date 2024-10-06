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
            colors: {
                'big-stone': {
                    '50': '#f3f8fc',
                    '100': '#e7f0f7',
                    '200': '#c9dfee',
                    '300': '#9ac6df',
                    '400': '#63a7cd',
                    '500': '#408db7',
                    '600': '#2f719a',
                    '700': '#275b7d',
                    '800': '#244d68',
                    '900': '#224258',
                    '950': '#172b3b',
                },
                
              }
        },
        
      
    },


        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ],
      

    // plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

    // plugins: [forms, typography],
    

    
};
