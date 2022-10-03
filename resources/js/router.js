import Vue from 'vue';
import VueRouter from 'vue-router';
// import { component } from 'vue/types/umd';

Vue.use(VueRouter)

// * importiamo le singole pagine

import HomePage from './pages/HomePage';

const router = new VueRouter ({
    mode: 'history',
    routes:[
        {
            path:'/HomePage',
            name:'HomePage',
            component:HomePage
        }
    ]
})
export default router