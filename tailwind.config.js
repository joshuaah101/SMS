const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage : theme => ({
                 'landing-1' : "url('/img/jpg/pic1.jpg')",
                 'landing-2' : "url('/img/jpg/pic2.jpg')",
                 'landing-3' : "url('/img/jpg/pic3.jpg')",
                 'landing-4' : "url('/img/jpg/pic4.jpg')",
                // 'landing-2' : "url('/storage/img/landing/landing-2.jpg')"
              })
        },
            screens : {
                'xs' : '320px',
                'sm' : '481px',
                'md' : '1024px',
                'lg' : '1200px',
                'xl' : '1201px',
            },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
