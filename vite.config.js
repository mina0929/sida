import { resolve } from "path";

export default {
  root: "src",
  base: "/wp-content/themes/sida/dist/",
  resolve: {
    alias: {
      "@": resolve(__dirname, "src"),
      "@scss": resolve(__dirname, "src/scss"),
      "@js": resolve(__dirname, "src/js"),
    },
  },
  css: {
    preprocessorOptions: {
      scss: {
        // 全てのSCSSに自動で先頭追記される
        additionalData: `
            @use "@scss/foundation/variables" as *;
            @use "@scss/foundation/mixin" as *;
        `,
      },
    },
  },
  build: {
    outDir: resolve(__dirname, "dist"),
    emptyOutDir: true,
    assetsDir: "",
    rollupOptions: {
      input: {
        main: resolve(__dirname, "src/main.js"),
        style: resolve(__dirname, "src/style.scss"),
      },
      output: {
        entryFileNames: "[name].js",
        chunkFileNames: "[name].js",
        assetFileNames: "[name][extname]",
      },
    },
  },
};
