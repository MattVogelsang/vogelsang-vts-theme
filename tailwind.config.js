/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './src/**/*.js',
    './patterns/**/*.php',
    './parts/**/*.html',
    './templates/**/*.html'
  ],
  safelist: [
    'it-services-layout',
    'left-services-group',
    'right-services-group',
    'left-group-image',
    'right-group-image'
  ],
  theme: {
    extend: {
      colors: {
        'vts-primary': '#071a2b',
        'vts-panel': '#0d2940',
        'vts-accent': '#0d5a8a',
        'vts-muted': '#9fb6c8',
      },
      fontFamily: {
        sans: ['IBM Plex Sans', 'system-ui', '-apple-system', 'sans-serif'],
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '1.5rem',
          lg: '2rem',
        },
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1200px',
        },
      },
    },
  },
  plugins: [],
}
