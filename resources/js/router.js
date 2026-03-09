import Signin from '@components/account/Signin.vue';
import Dashboard from '@components/pages/Dashboard.vue';
import { createRouter, createWebHistory } from 'vue-router'

export default createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'auth.signin',
      component: Signin,
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
    },
    {
      path: '/:path(.*)*',
      component: Dashboard,
      beforeEnter: (to, from, next) => {
        return next({ name: 'dashboard' });
      },
    }
  ],
});
