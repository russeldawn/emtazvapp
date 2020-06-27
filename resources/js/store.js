import Vue from "vue";
import Vuex from "vuex";
import router from "./router";
import axios from "axios";
import _ from 'lodash';
import * as SecureLS from 'secure-ls';
import createPersistedState from 'vuex-persistedstate';

// import ls from 'local-storage';

// const ls = new SecureLS({ encodingType: 'aes' });
const ls = new SecureLS({encodingType: '', isCompression: false});

Vue.use(Vuex);

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': window.csrf_token
};

export default new Vuex.Store({
	plugins: [
        createPersistedState({
          storage: {
            getItem: (key) => ls.get(key),
            setItem: (key, value) => ls.set(key, value),
            removeItem: (key) => ls.remove(key),
          },
        }),
    ],
    state: {
		authenticated: false,
		authentication: {},
		user: null,
		token: ''
    },
	getters: {
		getAuthenticatedUser: (state) => {
			return state.user;
		},
		getToken: (state) => {
			return state.token;
		},
		isAuthenticated: (state) => {
			return state.authenticated;
		}
    },
	mutations: {
		saveAuthentication (state, { token, expires_at }) {
            state.token = token;
            state.authentication = { token, expires_at };
            state.authenticated = true;

            ls.set('access_token', token);
            ls.set('expires_at', expires_at);


        },
        saveAuthenticatedUser(state, data) {
			state.me = data;
			ls.set('user', data);
        }
    },
    actions: {

    }
});
