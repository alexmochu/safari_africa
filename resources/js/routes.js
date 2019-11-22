import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home.vue';
import About from './components/About.vue';
import Safaris from './components/Safaris.vue';
import EditSafari from './components/EditSafariComponent.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/safari/update',
            name: 'edit',
            component: EditSafari 
        },
        {
            path: '/safaris',
            name: 'safaris',
            component: Safaris
        }
    ]
});

export default router;