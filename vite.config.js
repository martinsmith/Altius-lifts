import { defineConfig } from 'vite';
import { resolve } from 'path';
import legacy from '@vitejs/plugin-legacy';

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
        'css/styles': resolve(__dirname, 'src/css/styles.css'),
        'js/app': resolve(__dirname, 'src/js/app.js')
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
        require('postcss-import'),
        require('postcss-nesting'),
        require('autoprefixer')
      ]
    }
  },

  server: {
    port: 3000,
    proxy: {
      '^(?!/_dist/).*': 'https://hair-haven.ddev.site'
    }
  },

  base: '/_dist/',

  // Resolve configuration to handle module resolution issues
  resolve: {
    alias: {
      '@': resolve(__dirname, 'src')
    }
  }
});
