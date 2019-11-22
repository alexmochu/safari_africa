/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify'
import VueAxios from 'vue-axios';
import axios from 'axios';

import Routes from './routes.js';
import App from './views/App.vue';
import Store from './stores/'

Vue.config.productionTip = false
Vue.use(Vuetify)
Vue.use(VueAxios, axios);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: Routes,
    vuetify: new Vuetify(),
    store: Store,
    render: h => h(App),
});

export default app;
