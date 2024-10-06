const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                cyan: colors.cyan,
                gray: colors.gray,
                blue: colors.blue,
                purple: colors.purple,
                sky: colors.sky
                
            },
            spacing: {
                'hpp': '0.45rem',
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    
};
