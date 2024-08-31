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
        'sky-700': '#0284c7', // If you need to override or customize
      },
      fontFamily: {
        serif: ['Merriweather', 'serif'],
      },
    },
  },
  plugins: [],
}