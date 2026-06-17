import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Pliant", ...defaultTheme.fontFamily.sans],
                heading: ["Bricolage Grotesque", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                navy: {
                    DEFAULT: "#1B2F6E",
                    dark: "#142257",
                },
                gold: {
                    DEFAULT: "#F59E0B",
                    dark: "#D97706",
                },
            },
        },
    },

    plugins: [forms],
};
