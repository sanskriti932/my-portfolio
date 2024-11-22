import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '',
    build: {
      outDir: 'public/build',
    },
    server: {
      strictPort: true,
    },
  });
  