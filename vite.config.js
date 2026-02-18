import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: resolve(__dirname, 'src/js/main.js'),
      output: {
        entryFileNames: 'assets/main.js',
        assetFileNames: 'assets/main.[ext]',
      },
    },
  },
  server: {
    host: 'localhost',
    port: 5173,
    cors: true,
  },
});
