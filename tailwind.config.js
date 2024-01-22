/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./jobsearching website project/*.{html,js}"],
  theme: {
    extend: {
      colors:{
        danger: '#ff0000',
      }

    },
  },
  variants:{
    extend: {
      display:['group-focus'],
      opacity:['group-focus'],
      inset:['group-focus']

    },
  },
  plugins: [],
}

