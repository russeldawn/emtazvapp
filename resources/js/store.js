import Vue from "vue";
import Vuex from "vuex";
import router from "./router";
import axios from "axios";

Vue.use(Vuex);

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': window.csrf_token
};

export default new Vuex.Store({
    state: {
        saved: [],
        listing_summaries: [],
        listings: [],
        auth: false
    },
    getters: {
        // getListing(state) {
        //     return id => state.listings.find(listing => id == listing.id);
        // }
    },
    mutations: {
        // toggleSaved(state, id) {
        //     console.log('saved state: ', state);
        //     if (state.auth) {
        //         let index = state.saved.findIndex(saved => saved === id);

        //         console.log('saved id: ', id);

        //         if (index === -1) {
        //             state.saved.push(id);
        //         } else {
        //             state.saved.splice(index, 1);
        //         }
        //     } else {
        //         router.push('/login');
        //     }
        // },
        // addData(state, { route, data }) {
        //     console.log('added state: ', state);
        //     console.log('added route: ', route);
        //     console.log('added data: ', data);

        //     if (data.auth) {
        //         state.auth = data.auth;
        //     }

        //     if (route === 'listing') {
        //         state.listings.push(data.listing);
        //         console.log('added state.listing: ', state.listings);

        //     } else {
        //         state.listing_summaries = data.listings;
        //     }
        // }
    },
    actions: {
        // toggleSaved({ commit, state }, id) {
        //     console.log('commit: ', commit);
        //     console.log('state: ', state);
        //     console.log('id: ', id);
        //     console.log('state.auth: ', state.auth);


        //     if (state.auth) {
        //         axios.get('/api/user', { id }).then((data) => {
        //             console.log('toggled: ', data);
        //             // commit('toggleSaved', id);
        //         });
        //     } else {
        //         router.push('/login');
        //     }
        // }
    }
});