import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  root: './',
  base: '/',
  
  build: {
    outDir: 'web/_dist',
    emptyOutDir: false, // Don't empty the entire dist folder
    rollupOptions: {
      input: {
        main: resolve(__dirname, '_src/_js/main.js'),
      },
      output: {
        entryFileNames: 'js/[name].js',
        chunkFileNames: 'js/[name].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.endsWith('.css')) {
            return 'css/[name][extname]';
          }
          return 'assets/[name][extname]';
        },
      },
    },
    minify: 'esbuild',
    sourcemap: false,
  },
  
  css: {
    preprocessorOptions: {
      scss: {
        // Add any SCSS options here if needed
      },
    },
  },
});

