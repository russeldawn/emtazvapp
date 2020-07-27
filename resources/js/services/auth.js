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
			headers: {
                Authorization: 'Bearer ' + store.state.token,
                Accept: 'application/json',
            },
            method: 'get',
            url: '/api/logout'
        });

    },
    getUser() {
        return axios({
            headers: {
                Authorization: 'Bearer ' + store.state.token,
                Accept: 'application/json',
            },
            method: 'get',
            url: '/api/me',
        });
    }
}
