/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/**/*.{html,js,php}"],
  theme: {
    extend: {
      screens: {
        'xs': '400px',
        'xxs': '300px',
      },
    },
  },
  plugins: [
      require('flowbite/plugin'),
  ],
}

