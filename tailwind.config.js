/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                main: '#3d163b',
                secondary: '#51275e',
                alternative: '#7759d9',
                accent: '#d5c2dc'
            }
        },
    },
    plugins: [],
}

