import './bootstrap';
import { createApp } from 'vue';
import { createStore } from 'vuex';
import App from '@components/App.vue';
import router from './router';
const app = createApp(App);

const store = createStore({
    state: {

    },
    mutations: {

    },
    actions: {

    }
});
app.use(store);
app.use(router);
app.mount('#app');
