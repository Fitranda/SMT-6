module.exports = {
  content: [
    './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
    './public/index.html',
    './public/style.css',
    './src/style.css',
  ],
  theme: {
    colors: {
      'ungu': '#5267DF',
      'hitam':'#000000',
      'merah': '#FA5959',
      'biru': '#242A45',
      'orange': '#ff7849',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'putih': '#F7F7F7',
      'abu-abu': '#9194A2',
    },
    fontFamily: {
      Poppins: ['Poppins', 'sans-serif']
    },
    container: {
      center: true,
      padding: "1rem",
      screens:{
        lg : "1124px",
        xl: "1124px",
        "2xl":"1124px"
      }
    },
    extend: {
      colors: {
        'ungu': '#5267DF',
        'merah': '#FA5959',
        'biru': '#242A45',
        'orange': '#ff7849',
        'green': '#13ce66',
        'yellow': '#ffc82c',
        'gray-dark': '#273444',
        'putih': '#F7F7F7',
        'abu-abu': '#9194A2',
      },
      fontFamily: {
        Poppins: ['Poppins', 'sans-serif']
      },
      container: {
        center: true,
        padding: "1rem",
        screens:{
          lg : "1124px",
          xl: "1124px",
          "2xl":"1124px"
        }
      },
      // spacing: {
      //   '8xl': '96rem',
      //   '9xl': '128rem',
      // },
      // borderRadius: {
      //   '4xl': '2rem',
      // }
    }
  },
  plugins: [
    // require('@tailwindcss/forms'),
    // require('@tailwindcss/aspect-ratio'),
    // require('@tailwindcss/typography'),
    // require('tailwindcss-children'),
  ],
}
