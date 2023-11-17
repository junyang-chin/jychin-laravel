/** @type {import('tailwindcss').Config} */
import defaultTheme from "tailwindcss/defaultTheme";
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#007664",
                "light-dark": "#475569",
                dark: "#020617",
                light: "#f8fafc",
            },
            fontFamily: {
                sans: ["Barlow", ...defaultTheme.fontFamily.sans],
                title: ["Arimo", "Helvetica", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
