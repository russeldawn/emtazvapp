import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from "../components/Login.vue";
import Dashboard from '../components/Dashboard.vue';
import MainPage from "../components/dashboard/Main.vue";
import HomePage from '../components/dashboard/HomePage.vue'
import CustomHeader from '../components/dashboard/CustomHeader.vue';
import SideMenu from '../components/dashboard/SideMenu.vue';
import axios from "axios";
import store from "./store";

Vue.use(VueRouter);

let router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Login,
            name: 'login'
        },
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'dashboard',
            children: [
                {
                    path: '',
                    component: MainPage,
                    name: 'main'
                },
                {
                    path: 'home',
                    component: HomePage,
                    name: 'home'
                },
                {
                    path: 'header',
                    component: CustomHeader,
                    name: 'header'
                },
                {
                    path: 'sidemenu',
                    component: SideMenu,
                    name: 'sidemenu'
                },
            ]
        },
        {
            path: '*',

        }
    ],
    scrollBehavior(to, from, savedPosition) {
        return {
            x: 0,
            y: 0
        };
    }
});

router.beforeEach((to, from, next) => {

    next();
});

export default router;
