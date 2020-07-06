import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from "../components/Login.vue";
import Dashboard from '../components/Dashboard.vue';
import MainPage from "../components/pages/Main.vue";
import HomePage from '../components/pages/HomePage.vue'
import Business from '../components/pages/business/index.vue';
import Payment from '../components/pages/payment/index.vue';
import UserList from "../components/pages/user/index.vue";
import ZoningList from "../components/pages/zoning/index.vue";
import AddZoning from "../components/pages/zoning/add.vue";
import EditZoning from "../components/pages/zoning/edit.vue";
import ErrorPage from '../components/ErrorComponent.vue';
import axios from "axios";
import store from "./store";

import * as SecureLS from 'secure-ls';

// const ls = new SecureLS({ encodingType: 'aes' });
const ls = new SecureLS({encodingType: '', isCompression: false});

Vue.use(VueRouter);

let router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Login,
			name: 'login',
			meta: { requiresAuth: false }
        },
        {
            path: '/',
            component: Dashboard,
			name: 'main',
			meta: { requiresAuth: true },
            children: [
                {
                    path: 'dashboard',
                    component: MainPage,
					name: 'dashboard',
					meta: { requiresAuth: true },
                },
                {
                    path: '/users',
                    component: UserList,
					name: 'users',
					meta: { requiresAuth: true }
                },
                {
                    path: '/zoning',
                    component: ZoningList,
					name: 'zonings',
					meta: { requiresAuth: true }
                },
                {
                    path: '/zoning/add',
                    component: AddZoning,
					name: 'add_zoning',
					meta: { requiresAuth: true }
                },
                {
                    path: '/zoning/edit',
                    component: EditZoning,
					name: 'edit_zoning',
					meta: { requiresAuth: true }
                },
                {
                    path: 'land-use',
                    component: Business,
					name: 'land_uses',
					meta: { requiresAuth: true }
				},
				{
                    path: '/business',
                    component: Business,
					name: 'businesses',
					meta: { requiresAuth: true }
                },
				{
                    path: '/business/add',
                    component: Business,
					name: 'add_business',
					meta: { requiresAuth: true }
                },
                {
                    path: '/business/approve',
                    component: Business,
					name: 'approve_business',
					meta: { requiresAuth: true }
                },
                {
                    path: 'payment',
                    component: Payment,
					name: 'payments',
					meta: { requiresAuth: true }
				},

            ]
        },
        {
			path: '*',
			component: ErrorPage,
			meta: { requiresAuth: true }

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


	let sources = ls.getAllKeys();
	let authUser = store.state.authenticated;
	let requiresAuthRoute = to.matched.some(page => page.meta.requiresAuth);

	// console.log('authUser: ', authUser);
	// console.log('requiresAuthRoute: ', requiresAuthRoute);
	// console.log('sources: ', sources);
	// console.log('to: ', to);
	// console.log('from: ', from);

	// console.log("to.name !== 'login' && requiresAuthRoute && authUser == false: ", to.name !== 'login' && requiresAuthRoute && authUser == false);


	if (requiresAuthRoute && authUser) {
		console.log('PATH 1!');

		if (to.name !== 'login') {
			console.log('PATH 1.1!');
			next();
		} else {
			console.log('PATH 1.2!');
			next({ name: 'dashboard' });
		}

	} else if(to.name !== 'login' && requiresAuthRoute && authUser == false) {
		console.log('PATH 2!');
		next({ name: 'login' });
	} else if(to.name === 'login' && !requiresAuthRoute && authUser) {
		console.log('PATH 3!');
		next({ name: 'dashboard' });

	} else {
		console.log('PATH 4!');
		next();
	}

});

export default router;
