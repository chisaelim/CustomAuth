import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import AutoImport from 'unplugin-auto-import/vite';
import Components from 'unplugin-vue-components/vite';

export default defineConfig({
    base: './',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                }
            }
        }),
        Components({
            dirs: ['./resources/components/**'],
            extensions: ['vue'],
            dts: true,
        }),
        AutoImport({
            imports: [
                {
                    'vue': [
                        'createApp',
                        'computed',
                        'onMounted',
                        'onUpdated',
                        'ref',
                        'reactive',
                        'watch',
                        'onBeforeUpdate',
                        'h',
                        'onBeforeMount',
                        'provide',
                        'inject',
                        'defineModel',
                        'defineProps',
                        'nextTick',
                        'useAttrs',
                        'provide',
                        'inject',
                        'defineEmits',
                        'defineExpose',
                        'toRefs',
                        'shallowReactive',
                        'onUnmounted',
                        'onBeforeUnmount'
                    ],
                },
                {
                    'vue-router': [
                        'createRouter',
                        'createWebHistory',
                        'useRouter',
                        'useRoute'
                    ],
                },
                {
                    'vuex': [
                        'createStore',
                        'useStore'
                    ],
                },
                {
                    'vue-i18n': [
                        'createI18n',
                        'useI18n',
                    ],
                },
            ],
            dirs: [
                './resources/js/**',
            ],
            dts: true,
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@js' : '/resources/js',
            '@components' : '/resources/components',
            '@css' : '/resources/css',
            '@assets' : '/resources/assets',
        }
    },
    server: {
        cors: true,
        host: '0.0.0.0',
        port: process.env.VITE_HMR_PORT || 5173,
        hmr: {
            protocol: 'ws',
            host: process.env.VITE_HMR_HOST || 'localhost',
            port: process.env.VITE_HMR_PORT || 5173,
        },
        watch: {
            usePolling: true,
            useFsEvents: true,
            interval: 1000,
        }
    },
});
