/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.php",
    "./*.php",
    "./assets/js/**/*.js"
  ],
  darkMode: ['class', '[data-theme="dark"]'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['IRANYekanX', 'sans-serif'],
      },
      colors: {
        primary: {
          DEFAULT: 'var(--primary)',
          hover: 'var(--accent-strong)',
        },
        surface: {
          DEFAULT: 'var(--surface)',
          strong: 'var(--surface-strong)',
          dark: 'var(--surface-dark)',
          darker: 'var(--surface-darker)',
        },
        text: {
          DEFAULT: 'var(--text)',
          muted: 'var(--text-muted)',
          soft: 'var(--text-soft)',
        },
        border: {
          DEFAULT: 'var(--border)',
          strong: 'var(--border-strong)',
        }
      }
    },
  },
  plugins: [],
}
