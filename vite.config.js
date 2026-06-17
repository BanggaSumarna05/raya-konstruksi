import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import fs from "fs";
import os from "os";

// Only use Herd SSL if certificates actually exist
const homeDir = os.homedir();
const certPath = `${homeDir}/.config/herd/config/valet/Certificates/raya-konstruksi.test.crt`;
const keyPath  = `${homeDir}/.config/herd/config/valet/Certificates/raya-konstruksi.test.key`;
const hasHerdCerts = fs.existsSync(certPath) && fs.existsSync(keyPath);

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    build: {
        // Max minification
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
        },
        // Code splitting — separate vue/inertia from app code
        rollupOptions: {
            output: {
                manualChunks: {
                    'vue-vendor': ['vue', '@inertiajs/vue3'],
                },
            },
        },
        // CSS code splitting
        cssCodeSplit: true,
        // No source maps in production
        sourcemap: false,
        // Chunk size warning limit
        chunkSizeWarningLimit: 500,
    },
    ...(hasHerdCerts ? {
        server: {
            host: "raya-konstruksi.test",
            https: {
                cert: fs.readFileSync(certPath),
                key:  fs.readFileSync(keyPath),
            },
            hmr: {
                host: "raya-konstruksi.test",
            },
        },
    } : {}),
});
