/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'wedding-gold': '#f3debf',
        'wedding-bronze': '#ce9862',
        'wedding-dark': '#1a1a1a',
      },
      fontFamily: {
        'ephesis': ['Ephesis', 'cursive'],
        'cormorant': ['Cormorant Garamond', 'serif'],
        'open': ['Open Sans', 'sans-serif'],
      },
      width: {
        'mobile': '420px',
      },
      animation: {
        'fade-in-up': 'fadeInUp 1s ease-out forwards',
        'fade-in-left': 'fadeInLeft 1s ease-out forwards',
        'fade-in-right': 'fadeInRight 1s ease-out forwards',
        'pulse-slow': 'pulse 1s ease-in-out infinite',
        'wobble': 'wobble 1s ease-in-out',
        'tada': 'tada 1s ease-in-out',
        'rotate-up-right': 'rotateInUpRight 1s ease-out forwards',
        'rotate-up-left': 'rotateInUpLeft 1s ease-out forwards',
        'flip-in-x': 'flipInX 0.5s ease-out forwards',
      },
      keyframes: {
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeInLeft: {
          '0%': { opacity: '0', transform: 'translateX(-20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        fadeInRight: {
          '0%': { opacity: '0', transform: 'translateX(20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        wobble: {
          '0%': { transform: 'translateX(0)' },
          '15%': { transform: 'translateX(-25%) rotate(-5deg)' },
          '30%': { transform: 'translateX(20%) rotate(3deg)' },
          '45%': { transform: 'translateX(-15%) rotate(-3deg)' },
          '60%': { transform: 'translateX(10%) rotate(2deg)' },
          '75%': { transform: 'translateX(-5%) rotate(-1deg)' },
          '100%': { transform: 'translateX(0)' },
        },
        flipInX: {
          '0%': { transform: 'perspective(400px) rotateX(90deg)', opacity: '0' },
          '40%': { transform: 'perspective(400px) rotateX(-10deg)' },
          '70%': { transform: 'perspective(400px) rotateX(10deg)' },
          '100%': { transform: 'perspective(400px) rotateX(0)', opacity: '1' },
        },
        tada: {
          '0%': { transform: 'scale(1)' },
          '10%, 20%': { transform: 'scale(0.9) rotate(-3deg)' },
          '30%, 50%, 70%, 90%': { transform: 'scale(1.1) rotate(3deg)' },
          '40%, 60%, 80%': { transform: 'scale(1.1) rotate(-3deg)' },
          '100%': { transform: 'scale(1) rotate(0)' },
        },
        rotateInUpRight: {
          '0%': { transformOrigin: 'right bottom', transform: 'rotate(-90deg)', opacity: '0' },
          '100%': { transformOrigin: 'right bottom', transform: 'rotate(0)', opacity: '1' },
        },
        rotateInUpLeft: {
          '0%': { transformOrigin: 'left bottom', transform: 'rotate(90deg)', opacity: '0' },
          '100%': { transformOrigin: 'left bottom', transform: 'rotate(0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [],
}
