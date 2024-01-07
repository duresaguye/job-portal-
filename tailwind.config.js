/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./jobsearching website project/*.{html,js}"],
  theme: {
    extend: {},
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

