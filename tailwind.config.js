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



      "primary": "hsl(var(--theme-clr-primary))",
      "primary-alt": "hsl(var(--theme-clr-primary-alt))",

      "secondary": "hsl(var(--theme-clr-secondary))",
      // "secondary-alt": "hsl(var(--theme-clr-secondary-alt))",

      "theme-clr-white": 'hsl(var(--theme-clr-white) / <alpha-value>)',
      "on-theme-clr-white": 'hsl(var(--on-theme-clr-white) / <alpha-value>)',

      "theme-clr-light": 'hsl(var(--theme-light) / <alpha-value>)',
      "on-theme-clr-light": 'hsl(var(--on-theme-clr-light) / <alpha-value>)',

      "theme-clr-secondary": 'hsl(var(--theme-clr-secondary) / <alpha-value>)',
      "on-theme-clr-secondary": 'hsl(var(--on-theme-clr-secondary) / <alpha-value>)',

      "theme-clr-secondary-alt": 'hsl(var(--theme-clr-secondary-alt) / <alpha-value>)',

      "theme-clr-gray-300": 'hsl(var(--theme-clr-gray-300) / <alpha-value>)',


      "theme-clr-call-to-action": 'hsl(var(--theme-clr-call-to-action) / <alpha-value>)',
      "on-theme-clr-call-to-action": 'hsl(var(on-theme-clr-call-to-action) / <alpha-value>)',

      "accent": {
        "50": "hsl(var(--theme-clr-accent-50) / <alpha-value>)",
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
