import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from "../components/Login.vue";
import Dashboard from '../components/Dashboard.vue';
import MainPage from "../components/dashboard/Main.vue";
import HomePage from '../components/dashboard/HomePage.vue'
import CustomHeader from '../components/dashboard/CustomHeader.vue';
import SideMenu from '../components/dashboard/SideMenu.vue';
import UserList from "../components/dashboard/UserList.vue";
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
                    component: CustomHeader,
                    name: 'land_use'
				},
				{
                    path: '/business/add',
                    component: CustomHeader,
                    name: 'add_business'
                },
                {
                    path: '/business/approve',
                    component: CustomHeader,
                    name: 'approve_business'
                },
                {
                    path: 'payment',
                    component: SideMenu,
                    name: 'payment'
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
