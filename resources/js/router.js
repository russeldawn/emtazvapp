import Vue from 'vue';
import VueRouter from 'vue-router';
// import ListingPage from "../components/ListingPage.vue";
import HomePage from "../components/HomePage";
import MainPage from "../components/MainPage";
// import SavedPage from "../components/SavedPage.vue";
import LoginPage from "../components/LoginPage.vue";
import SignUp from "../components/LoginPage.vue";
import ExampleComponent from "./components/ExampleComponent.vue";
import AuthorizedClients from "./components/passport/AuthorizedClients.vue";
import Clients from "./components/passport/Clients.vue";
import PersonalAccessTokens from "./components/passport/PersonalAccessTokens.vue";
import axios from "axios";
import store from "./store";

Vue.use(VueRouter);

let router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: LoginPage,
            name: 'login'
        },
        {
            path: '/dashboard',
            component: MainPage,
            name: 'main'
        },
        {
            path: '/home',
            component: HomePage,
            name: 'home'
        },

        {
            path: '/signup',
            component: SignUp,
            name: 'signup'
        },
        {
            path: '/clients',
            component: Clients,
            name: 'clients'
        },
        {
            path: '/authorizedclients',
            component: AuthorizedClients,
            name: 'authorizedClients'
        },
        {
            path: '/personalAccessTokens',
            component: PersonalAccessTokens,
            name: 'personalAccessTokens'
        },
    ],
    scrollBehavior(to, from, savedPosition) {
        return {
            x: 0,
            y: 0
        };
    }
});

router.beforeEach((to, from, next) => {
    let serverData = JSON.parse(window.zvapp_server_data);
    console.log('to.path: ', to.path);
    console.log('to: ', to);
    console.log('next: ', next);
    console.log('serverData: ', serverData);
//     console.log('!serverData.path: ', !serverData.path);
//     console.log('to.path !== serverData.path: ', to.path !== serverData.path);

//     if (to.name === 'listing' ? store.getters.getListing(to.params.listing) : store.state.listing_summaries.length > 0 || to.name === 'login') {
//         next();
//     } else if (!serverData.path || to.path !== serverData.path) {
//         axios.get(`/api${to.path}`).then(({ data }) => {
//             store.commit('addData', { route: to.name, data });
//             next();
//         });
//     } else {
//         store.commit('addData', { route: to.name, data: serverData });
//         serverData.saved.forEach(id => store.commit('toggleSaved', id));
//         next();
//     }
});

export default router;