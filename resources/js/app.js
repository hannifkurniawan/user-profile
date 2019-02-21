require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import RegisterComponent from './components/RegisterComponent.vue';
import DashboardComponent from './components/DashboardComponent.vue';
import EditProfileComponent from './components/EditProfileComponent.vue';
import EditPasswordComponent from './components/EditPasswordComponent.vue';


const routes = [
  {
      name: 'home',
      path: '/',
      component: HomeComponent
  },
  {
      name: 'register',
      path: '/register',
      component: RegisterComponent,
  },
  {
      name: 'dashboard',
      path: '/dashboard',
      component: DashboardComponent,
  },
  {
      name: 'edit-profile',
      path: '/users/edit-profile',
      component: EditProfileComponent,
  },
  {
    name: 'edit-password',
    path: '/users/edit-password',
    component: EditPasswordComponent,
}
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');