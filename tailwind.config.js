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
        },
    },
    daisyui: {
        themes: [
            {
                // 指定された物しか利用できない、多分
                dinner: {
                    "primary": "#ff784e",
                    "secondary": "#a6384c",
                    "accent": "#73a626",
                    "neutral": "#ffc9b8",
                    "base-100": "#f2f2f2",
                },
            },
            // "light",
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
    },
    plugins: [forms, require("daisyui")],
    darkMode: 'class',// 'media' or 'class'
};
