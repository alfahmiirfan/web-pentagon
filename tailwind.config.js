/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: ['Poppins', 'sans-serif'],
            },
            colors: {
                // green
                'cstm-green-900': '#018864',
                'cstm-green-50': '#F6F8F7',

                // blue
                'cstm-blue-900': '#075186',
            },
        },
    },
    plugins: [],
};
