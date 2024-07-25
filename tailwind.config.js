import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        extend: {
            colors: {
                'tw-bg-primary-700': '#02385D',
                'tw-bg-primary-600': '#245b7A',
                'tw-bg-primary-500': '#5E829A',
                'tw-bg-primary-400': '#95ABBB',
                'tw-bg-primary-300': '#C8D5DE',
                'tw-bg-primary-200': '#E3E8ED',
                'tw-bg-primary-100': '#EFF3F4',
                'tw-bg-primary-100': '#F7F9FA',
                'tw-bg-secondary-700': '#D42801',
                'tw-bg-secondary-600': '#dc2626',
                'tw-bg-secondary-500': '#ef4444',
                'tw-bg-secondary-400': '#f87171',
                'tw-bg-secondary-200': '#fca5a5',
                'tw-text-primary-700': '#02385D',
                'tw-text-primary-600': '#245b7A',
                'tw-text-primary-500': '#5E829A',
                'tw-text-primary-400': '#95ABBB',
                'tw-text-secondary-700': '#D42801',
                'tw-text-secondary-600': '#dc2626',
                'tw-text-secondary-500': '#ef4444',
                'tw-text-secondary-400': '#f87171',
                'tw-border-primary-700': '#02385D',
                'tw-border-primary-600': '#245b7A',
                'tw-border-primary-500': '#5E829A',
                'tw-border-secondary-700': '#D42801',
                'tw-border-secondary-600': '#dc2626',
                'tw-border-secondary-500': '#ef4444',
            },
        },
    },

    plugins: [
        forms,
        typography,
        require('preline/plugin'),
    ],
};
