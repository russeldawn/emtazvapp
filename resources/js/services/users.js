import axios from 'axios';
import store from "../store";

export default {
	getUsers(payload) {

		let data = {
			headers: {
				Authorization: 'Bearer ' + store.state.token,
				Accept: 'application/json',
			},
			method: 'GET',
			url: '/api/users' + payload.query,
		};

        return axios(data);
    }
}
