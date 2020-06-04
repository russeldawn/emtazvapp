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
        auth: false
    },
    getters: {

    },
    mutations: {

    },
    actions: {

    }
});
