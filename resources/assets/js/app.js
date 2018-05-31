
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

import Loja from './components/loja/Loja.vue';
import LojaDetalhe from './components/loja/Detalhe.vue';
import Produto from './components/produto/Produto.vue';

import store from './store';

import { routes } from './routes';
const router = new VueRouter({
    routes,
    mode: 'history'
});

Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    store,
    router,
    components: {Loja, LojaDetalhe, Produto}
});
