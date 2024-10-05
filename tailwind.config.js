/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'button-color-1': '#0284c7', // If you need to override or customize
        'main-theme-color': '#091235',
        'secondary-theme-color-2': '#FFDE21',
        'button-color-1': '#091235',
        'button-color-1-hover': '#FFDE21',
        'text-color-1-hover': '#FFDE21',
        //'button-color-1': '#091235',
      },
      fontFamily: {
        serif: ['Merriweather', 'serif'],
      },
    },
  },
  plugins: [],
}