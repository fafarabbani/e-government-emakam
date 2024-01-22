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
              "inter" :['inter'],
              "poppins" :['poppins'],
            },
            colors: {
              "primary" :'#057A8D',
              "dark" : '#0f172a',
              "grey" : '#222831',
              "secondary" : '#C2C8DA',
              "black" : '#000000',
              "white" : '#fff',
              "abu"  : '#111827',
            },
          },
    },

    plugins: [
      require("@tailwindcss/forms")({
        strategy: 'base', // only generate global styles
        strategy: 'class', // only generate classes
      }),
    ],
};
