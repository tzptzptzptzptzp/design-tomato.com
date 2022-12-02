/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './dist/*.{html,php,js}',
    './dist/parts/*.{html,php,js}',
    './dist/assets/*.{html,php,js}',
  ],
  theme: {
    screens: {
      's': {'max': '599px'},
      'm': {'min': '600px', 'max': '959px'},
      'l': {'min': '960px'},
      'sm': {'max': '959px'},
      'ml': {'min': '600px'},
    },
    gap: {
      '1': '1%',
      '2': '2%',
      '3': '3%',
      '4': '4%',
      '5': '5%',
      '6': '6%',
      '7': '7%',
      '8': '8%',
      '9': '9%',
      '10': '10%',
    },
    extend: {
      borderRadius: {
        '20': '20px',
        '25': '25px',
      },
      colors: {
        transparent: 'transparent',
        main: 'var(--main-color)',
        sub: 'var(--sub-color)',
        font: 'var(--font-color)',
        bg: 'var(--bg-color)',
        userRed: 'var(--user-red)',
        userBlue: 'var(--user-blue)',
        userGreen: 'var(--user-green)',
        userYellow: 'var(--user-yellow)',
        userWhite: 'var(--user-white)',
        userBlack: 'var(--user-black)',
      },
      maxWidth: {
        '1280': '1280px',
        '1200': '1200px',
        '1000': '1000px',
        '800': '800px',
        '600': '600px'
      },
      transitionDuration: {
        '800': '800ms',
        '1500': '1500ms',
        '2000': '2000ms',
        '3000': '3000ms',
        '5000': '5000ms',
      },
      zIndex: {
        '1': '1',
        '3': '3',
        '5': '5',
        '99': '99',
        '999': '999',
        '-1': '-1',
      },
    },
  },
  plugins: [],
}
