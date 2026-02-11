import { defineConfig } from 'vite';
import { resolve } from 'path';
import legacy from '@vitejs/plugin-legacy';
import postcssImport from 'postcss-import';
import postcssNesting from 'postcss-nesting';
import autoprefixer from 'autoprefixer';

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
        'css/styles': resolve(process.cwd(), 'src/css/styles.css'),
        'js/app': resolve(process.cwd(), 'src/js/app.js')
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
        autoprefixer
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
