/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: ["./src/**/*.{html,php,js}",
    // "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      "primary": {
        "50": "hsl(104, 57%, 51%)",//#5FC93A;
        "500": "hsl(106, 47%, 14%)",//#1B3513;
      },
      'accent': {
        '500': 'hsl(51, 75%, 59%)',//#E5CC46;
      },
      "white": "#FFFFFF",
      "white-inverse": 'hsl(var(--clr-white-inverse) / <alpha-value>)',
      "black": "#000000",
      "dark": {
        50: 'hsl(var(--clr-neutral-50) / <alpha-value>)',
        200: 'hsl(var(--clr-dark-200) / <alpha-value>)',
        500: '#000000',
      },

      'transparent': "rgba(0, 0, 0, 0.0)"
    }
  },
  plugins: [
    // require('flowbite/plugin'),
  ],
}


// .before\:bg-transparent::before {
//   content: var(--tw-content);
//   background-color: transparent;
// }
