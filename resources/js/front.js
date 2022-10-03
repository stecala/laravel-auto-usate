import Vue from 'vue';
import VueRouter from 'vue-router';

window.Vue = require('vue');
Vue.use(VueRouter)

import App from './pages/App';
import router from './router';
const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});