module.exports = {
  content: [
    "./**/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': 'rgb(67, 142, 198)',
        'custom-orange': 'rgb(231, 120, 46)',
      },
    },
  },
  plugins: [],
  corePlugins: {
    preflight: false, // Disable Tailwind's base styles to prevent conflicts
  },
}
