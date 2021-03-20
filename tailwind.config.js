module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sans': ['Helvetica Neue','Helvetica', 'Arial', 'sans-serif'],
    },
    extend: {
      zIndex: {
        '-10':'-10'
      },
      colors:{
        red:{
          100:'#9C1C36',
          200:'#4F0A18'
        },
        green:{
          100:'#064E3B',
          200:'#E6FFF8'
        }
      },
      backgroundImage: theme => ({
        'riga-landing': "url('/img/riga.svg')"
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
