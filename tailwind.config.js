/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
