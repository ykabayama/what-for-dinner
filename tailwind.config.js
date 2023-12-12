import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontSize: {
            sm: '0.8rem',
            base: '1rem',
            xl: '1.25rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                notoSansJP: ['Noto Sans JP', 'sans-serif'],
            },
            colors: {
                "primary": "#FF784E",
                "secondary": "#A6384C", // TODO
                "accent": "#73A626", // TODO
                "neutral": "#FFC9B8",
                "base": "#F2F2F2",
            }
        },
    },
    daisyui: {
        themes: [
            {
                dinner: {
                    "primary": "#FF784E",
                    "secondary": "#A6384C", // TODO
                    "accent": "#73A626", // TODO
                    "neutral": "#FFC9B8",
                    "base": "#F2F2F2",
                },
            },
            // "light",
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    },
    plugins: [forms, require("daisyui")],
    darkMode: 'class',// 'media' or 'class'
};
