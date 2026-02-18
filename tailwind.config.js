/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './inc/**/*.php',
    './src/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#DB1717',
        netral: {
          300: '#DADCE0',
          400: '#BDC1C6',
          900: '#202124'
        },
      },
      backgroundImage: {
        'gradient-poster': 'linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(0,0,0,0.06) 8%, rgba(0,0,0,0.15) 16%, rgba(0,0,0,0.78) 66%, rgba(0,0,0,0.92) 92%, rgba(0,0,0,1) 100%)',
      },
    },
  },
  plugins: [],
};
