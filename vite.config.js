import { defineConfig } from 'vite';
import { resolve } from 'path';
import legacy from '@vitejs/plugin-legacy';
import postcssImport from 'postcss-import';
import postcssNesting from 'postcss-nesting';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import purgecss from '@fullhuman/postcss-purgecss';

export default defineConfig({
  plugins: [
    legacy({
      targets: ['defaults', 'not IE 11'],
      modernPolyfills: true
    })
  ],

  build: {
    outDir: 'web/_dist',
    sourcemap: false,
    rollupOptions: {
      input: {
        // JavaScript entry
        'js/app': resolve(process.cwd(), 'src/js/app.js'),

        // CSS entries - code splitting for better performance
        'css/critical': resolve(process.cwd(), 'src/css/critical.css'),
        'css/shared': resolve(process.cwd(), 'src/css/shared.css'),
        'css/home': resolve(process.cwd(), 'src/css/pages/home.css'),
        'css/services': resolve(process.cwd(), 'src/css/pages/services.css'),
        'css/contact': resolve(process.cwd(), 'src/css/pages/contact.css')
      },
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name].[ext]'
      },
      external: [
        // Exclude native modules and problematic dependencies
        'fsevents'
      ]
    }
  },

  optimizeDeps: {
    exclude: [
      // Exclude native modules from optimization
      'fsevents'
    ]
  },

  css: {
    postcss: {
      plugins: [
        postcssImport,
        postcssNesting,
        autoprefixer,
        // PurgeCSS - Remove unused CSS
        purgecss({
          content: [
            './templates/**/*.twig',
            './templates/**/*.html',
            './src/js/**/*.js'
          ],
          // Safelist for dynamically added classes
          safelist: {
            standard: [
              'loading',
              'loaded',
              'fonts-loaded',
              'transitions-enabled',
              'fully-loaded',
              'animations-enabled',
              'in-view',
              'modal-open',
              'active',
              'hidden',
              'visible',
              'portrait-image',
              'error',
              'show'
            ],
            // Safelist patterns for dynamic classes
            deep: [
              /^home-/,
              /^services-/,
              /^contact-/,
              /^team-/,
              /^offers-/,
              /^salon-/,
              /-page$/,
              /^data-/,
              /^fui-/,
              /^fa-/,
              /^fab-/,
              /^fas-/,
              /^far-/
            ],
            greedy: [
              /modal/,
              /tab/,
              /btn/,
              /service/
            ]
          },
          // Don't remove CSS from these layers
          blocklist: [],
          // Custom extractor for Twig templates
          defaultExtractor: content => {
            // Match class names in Twig templates
            const broadMatches = content.match(/[^<>"'`\s]*[^<>"'`\s:]/g) || [];
            const innerMatches = content.match(/[^<>"'`\s.()]*[^<>"'`\s.():]/g) || [];
            return broadMatches.concat(innerMatches);
          }
        }),
        cssnano({
          preset: ['default', {
            discardComments: {
              removeAll: true
            }
          }]
        })
      ]
    }
  },

  server: {
    port: 3000,
    proxy: {
      '^(?!/_dist/).*': 'https://altius-lifts.ddev.site'
    }
  },

  base: '/_dist/',

  // Resolve configuration to handle module resolution issues
  resolve: {
    alias: {
      '@': resolve(process.cwd(), 'src')
    }
  }
});
