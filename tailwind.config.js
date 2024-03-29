const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      whitelist: [
        /language/,
        /hljs/,
        /mce/,
      ],
    },
  },
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      fontFamily: {
        sans: [
          '"Fira Sans Extra Condensed"',
          ...defaultTheme.fontFamily.sans,
        ],
        mono: [
          '"Space Mono"',
          ...defaultTheme.fontFamily.mono,
        ],
      },
      boxShadow: {
        ...defaultTheme.boxShadow,
        'outline-white': '0 0 0 3px rgba(255, 255, 255, .45)',
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
      spacing: {
        '7': '1.75rem',
        '9': '2.25rem'
      },
    },
    fontSize: {
      'xs': '.8rem',
      'sm': '.925rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },

    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.gray.300'),
          a: {
            color: theme('colors.indigo.200'),
            '&:hover': {
              color: theme('colors.indigo.500'),
            }
          },
          'h1, h2, h3, h4': {
            color: theme('colors.gray.200')
          },
          code: {
            color: theme('colors.indigo.200'),
            fontWeight: theme('fontWeight.medium'),
            backgroundColor: theme('colors.gray.700'),
            borderRadius: theme('borderRadius.default'),
            '&:before, &:after': {
              color: theme('colors.indigo.400'),
            }
          },
          pre: {
            fontFamily: theme('fontFamily.mono'),
            borderColor: theme('colors.gray.500'),
            borderWidth: theme('spacing.px'),
            whiteSpace: 'pre-wrap',
          }
        },
      }
    })
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus']
  },
  plugins: [
    function ({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    },
    require('@tailwindcss/typography'),
  ]
}
