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
                'hanuman': ['Hanuman', 'serif'],
                'inter': ['Inter', 'sans-serif']
            },
            colors: {
                'blue-primary': '#171738'
            },
            screens: {
                'sm-460': '460px',
                'md-600': '600px',
                'md-768': '768px',
                'md-800': '800px',
                'md-900': '900px',
                'lg-1000': '1000px',
                'lg-1240': '1240px',
                'lg-1365': '1365px',
            }
        },
    },

    plugins: [forms, typography],
};
