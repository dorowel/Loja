import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Login from "@/views/Login.vue";
// @ts-ignore
import middleware from "../services/middleware.js";
import Principal from "@/views/principal.vue";
import register from "@/views/register.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      beforeEnter: middleware.auth,
      component: HomeView,

    },
    {
      path: '/register',
      name: 'register',
      component: register,
    },
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/principal',
      name: 'principal',
      beforeEnter: middleware.auth,
      component: Principal
    },
    {
      path: '/about',
      name: 'about',
      beforeEnter: middleware.auth,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    }
  ]
})

export default router
