module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/css/app.css',
    './resources/views/welcome.blade.php',
    './public/css/app.css',
  ],
  darkMode :false,
  theme: {
    extend: {
        colors:{
            "ungu":"#5267DF",
            "merah":"#FA5959",
            "biru":"#242A45",
            "abu-abu":"#9194A2",
            "putih":"#F7F7F7",
        },

        container:{
            center:true,
            padding:"1rem",
            screens:{
                lg:"1124px",
                xl:"1124px",
                "2xl":"1124px"
            }
        }
    },
  },
  plugins: [],
}
