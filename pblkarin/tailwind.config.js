const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily : {
                "poppins" : ['poppins']
              },
              colors : {
                "biru_hover": '#171E31',
                "merah" : '#CF2E2E',
                "beige" : '#FFF4F0',
                "biru-tua" : '#4682B4',
                "biru_tengah": '#CDDFEF',
                "biru_muda": '#E8F5FF',
                "kuning": '#FFD800',
                "hijau": '#009000 ',
            }
            },
          },
    plugins: [require('@tailwindcss/forms')],
};
