import axios from 'axios';
import store from "../store";

export default {
    login(data) {
        return axios({
            method: 'post',
            url: '/api/login',
            data: data
        });
    },
    logout() {

        return axios({
            method: 'get',
            url: '/api/logout'
        });

    },
	getCounters(data) {
        return axios({
            headers: {
                Authorization: 'Bearer ' + store.state.token,
                Accept: 'application/json',
            },
            method: 'post',
			url: '/api/dashboard',
			data
        });
    }
}
