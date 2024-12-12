/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/**/*.{html,js,php}"],
  theme: {
    extend: {
      screens: {
        'xs': '400px',
        'xxs': '300px',
      },colors: {
        'primary': '#005C78',
        'secondary': '#F3F7EC',
      },
    },
  },
  plugins: [
      require('flowbite/plugin'),
  ],
}

