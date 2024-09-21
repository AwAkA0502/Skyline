/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
      extend: {
        colors: {
            primary1: '#CDA274',
            primary2: '#292F36',
            primary3: '#F4F0EC',
            logo: '#172736',
            textcolor: '#4D5053'
        },
        screens: {
            'mobile': {'max': '899px'}, 
            'navbarMobile': {'min': '900px'}, 
            'desktop': {'min': '1024px'}, 
        },
        fontFamily: {
            jost: ['Jost', 'sans-serif'],
            'dm-serif': ['"DM Serif Display"', 'serif'],
        },
        spacing: {
            'DesktopWidth': '1200px',
            'MobileWidth': '320px',
            'DesktopNavHeight': '135px',
            'MobileNavHeight': '62px',
        },
        boxShadow: {
            custom: '0px 6.67px 13.33px 0px rgba(192, 192, 192, 0.35)',
        },
      },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
