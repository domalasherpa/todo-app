/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', 'sans-serif'],
        'magilio': ['Magilio', 'sans-serif'],
        'bacasime':[ 'Bacasime Antique', 'serif'],                           
      },
    },
  },
  plugins: [],
}