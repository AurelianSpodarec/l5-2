module.exports = {
    mode: 'jit',
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.{php,vue,js}',
        ],
        safelist: [
            //Background Colors
            'bg-white',
            'bg-gray-50',
            'bg-gray-800',

            // Width
            'w-1/2',

            // Grid
            'md:grid-cols-2',
            'md:grid-cols-3',
            'md:grid-cols-5',
            'md:grid-cols-6',

            // Text
            'text-lg',

            // Text Color
            'text-blue-700',
            'text-gray-700',

            // Text Style
            'underline',

            // Overflow
            'overflow-hidden'

            
        ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: {
                    'default': '#0061AC',
                    '100': '#caf0f8',
                    '200': '#ADE8F4',
                    '300': '#90E0EF',
                    '400': '#48CAE4',
                    '500': '#00B4D8',
                    '600': '#0096C7',
                    '700': '#0077B6',
                    '800': '#023E8A',
                    '900': '#03045E'
                },
                secondary: {
                    'default': '#ffaa1b',
                    '300': '#ffdda4',
                    '500': '#ffcc76',
                    '700': '#ffbb49'
                },
                teritary: {
                    'default': '#015249',
                    '300': '#fdcb56',
                    '500': 'blue',
                    '700': '#ee811d'
                },
                accent: {
                    'default': '#9B2943',
                    '100': '#EF3E42'
                },
                neutral: {
                    '100': '#FFFFFF',
                    '200': '#FAFAFA',
                    '300': '#F0F0F0',
                    '400': '#FBFBFB',
                    '500': '#C2C2C2',
                    '600': '#6B6B6B',
                    '700': '',
                    '800': '#222222',
                    '900': '#000',
                },
                complimentary: 'red',
                'success': {
                    'default': '#2d9e64',
                    '300': '#acd8c1',
                    '500': '#81c5a2',
                    '700': '#57b183',
                },
                'warning': {
                    'default': '#f15223',
                    '300': '#f9baa7',
                    '500': '#f7977b',
                    '700': '#f4754f',
                },
                'danger': {
                    'default': '#f73131',
                    '300': '#ff8585',
                    '500': '#ff5050',
                    '700': '#f73030',
                },
                'info': {
                    'default': '#05c1ff',
                    '300': '#9be6ff',
                    '500': '#6adaff',
                    '700': '#38cdff',
                }
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        // require('./../scripts/components/fadeup'),
    ],
};
