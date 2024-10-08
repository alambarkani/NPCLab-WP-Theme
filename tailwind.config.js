/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      keyframes: {
        slideInFromBottom: {
          '0%': {
            transform: 'translateY(50%)',
            opacity: 0,
          },
          '100%': {
            transform: 'translateY(0)',
            opacity: 1,
          },
        },
        // Keyframe untuk slide-in dari kiri ke kanan
        slideInFromLeft: {
          '0%': {
            transform: 'translateX(-100%)',
            opacity: 0,
          },
          '100%': {
            transform: 'translateX(0)',
            opacity: 1,
          },
        },
        
        // Keyframe untuk slide-in dari atas ke bawah
        slideInFromTop: {
          '0%': {
            transform: 'translateY(-100%)',
            opacity: 0,
          },
          '100%': {
            transform: 'translateY(0)',
            opacity: 1,
          },
        },
        
        // Keyframe untuk fade-in
        fadeIn: {
          '0%': {
            opacity: 0,
          },
          '100%': {
            opacity: 1,
          },
        },
        
        // Keyframe untuk rotate 360 derajat
        rotate360: {
          '0%': {
            transform: 'rotate(0deg)',
          },
          '100%': {
            transform: 'rotate(360deg)',
          },
        },
        
        // Keyframe untuk zoom-in
        zoomIn: {
          '0%': {
            transform: 'scale(0.5)',
          },
          '100%': {
            transform: 'scale(1)',
          },
        },
      },
      
      // Animasi yang menggunakan keyframe di atas
      animation: {
        'slide-in-from-left': 'slideInFromLeft 1s ease-out',
        'slide-in-from-top': 'slideInFromTop 1s ease-out',
        'fade-in': 'fadeIn 1s ease-out',
        'rotate-360': 'rotate360 5s linear',
        'zoom-in': 'zoomIn 2s ease-in-out',
        'slide-in-from-bottom': 'slideInFromBottom 1s ease-out',
      },
    },
    fontFamily:{
      'header': [
        'Nasalization'
      ],
    'body': [
        'Corbel',
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji'
    ],
        'sans': [
      'Inter',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji'
    ]
  }
  },
  plugins: [
    require('preline/plugin'),
  ],
}

