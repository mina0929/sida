import { resolve } from "path";

export default {
  root: "src",
  base: "/wp-content/themes/sida/dist/", // Local内のテーマパス
  build: {
    outDir: resolve(__dirname, "dist"),
    emptyOutDir: true,
    rollupOptions: {
      input: {
        // JSエントリー
        main: resolve(__dirname, "src/main.js"),
        // SCSSエントリー（FLOCSSの集約ファイル）
        style: resolve(__dirname, "src/style.scss"),
      },
    },
  },
  server: {
    proxy: {
      "/": "http://sida-hair.local/", // LocalでのサイトURL
    },
  },
};
