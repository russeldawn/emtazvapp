import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from "../components/Login.vue";
import Dashboard from '../components/Dashboard.vue';
import MainPage from "../components/pages/Main.vue";
import HomePage from '../components/pages/HomePage.vue'
import Business from '../components/pages/business/index.vue';
import Payment from '../components/pages/payment/index.vue';
import UserList from "../components/pages/user/index.vue";
import Zoning from "../components/pages/zoning/index.vue";
import axios from "axios";
import store from "./store";

// component:
//       () => import(/* webpackChunkName: "dashboard" */ './pages/Dashboard.vue'),
//   },

// const Login =
// 	() => import(/* webpackChunkName: "dynamically-imported-component" */ "../components/Login.vue");

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
            path: '/',
            component: Dashboard,
            name: 'main',
            children: [
                {
                    path: 'dashboard',
                    component: MainPage,
                    name: 'dashboard'
                },
                {
                    path: '/users',
                    component: UserList,
                    name: 'users'
                },
                {
                    path: '/zoning',
                    component: Zoning,
                    name: 'zonings'
                },
                {
                    path: '/zoning/add',
                    component: HomePage,
                    name: 'add_zoning'
                },
                {
                    path: '/zoning/endorse',
                    component: HomePage,
                    name: 'endorse_zoning'
                },
                {
                    path: '/zoning/approve',
                    component: HomePage,
                    name: 'approve_zoning'
                },
                {
                    path: 'land-use',
                    component: Business,
                    name: 'land_uses'
				},
				{
                    path: '/business',
                    component: Business,
                    name: 'businesses'
                },
				{
                    path: '/business/add',
                    component: Business,
                    name: 'add_business'
                },
                {
                    path: '/business/approve',
                    component: Business,
                    name: 'approve_business'
                },
                {
                    path: 'payment',
                    component: Payment,
                    name: 'payments'
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
