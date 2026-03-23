import Login from '@components/auth/Login.vue';
import Logout from '@components/auth/Logout.vue';
import Dashboard from '@components/pages/Dashboard.vue';
import { createRouter, createWebHistory } from 'vue-router'

export default createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'auth.logout',
      component: Logout,
    },
    {
      path: '/',
      name: 'auth.login',
      component: Login,
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
