/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: ["./src/**/*.{html,php,js}",
    // "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      "transparent": "rgba(0, 0, 0, 0.0)",
      "white": "#FFFFFF",
      "black": "#000000",



      "primary": "hsl(var(--clr-primary))",
      "secondary": "hsl(var(--clr-secondary))",
      "accent": "hsl(var(--clr-accent))",


      "theme-white": 'hsl(var(--theme-white) / <alpha-value>)',
      "on-theme-white": 'hsl(var(--on-theme-white) / <alpha-value>)',

      "theme-light": 'hsl(var(--theme-light) / <alpha-value>)',
      "on-theme-light": 'hsl(var(--on-theme-light) / <alpha-value>)',

      "theme-clr-secondary": 'hsl(var(--theme-clr-secondary) / <alpha-value>)',
      "theme-clr-secondary": 'hsl(var(--theme-clr-secondary) / <alpha-value>)',

      "accent": {
        "50": "hsl(var( --theme-clr-accent) / <alpha-value>)",
      },
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
