
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

import VueRouter from 'vue-router';
import vueScrollTo from 'vue-scroll-to';



Vue.use(VueRouter);
Vue.use(vueScrollTo);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var fronter = Vue.component('fronter', require('./components/fronter.vue'));
var myskills = Vue.component('myskills', require('./components/myskills.vue'));
var portfolio = Vue.component('portfolio', require('./components/portfolio.vue'));
var mail = Vue.component('mail', require('./components/mail.vue'));

const routes = [
  {path: '/', component: myskills},
  {path: '/portfolio', component: portfolio},
]


const router = new VueRouter({
  routes,
  mode:'history',
  base: __dirname,
});


const app = new Vue({
  el: '#app',
    router
});
