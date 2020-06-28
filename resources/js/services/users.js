import axios from 'axios';
import store from "../store";

export default {
	getUsers(payload) {

		let data = {
			headers: {
				Authorization: 'Bearer ' + store.state.token,
				Accept: 'application/json',
			},
			method: 'post',
			url: '/api/users' + payload.query,
		};

		if (payload.pageSize) {
			data.data = {
				'pageSize': payload.pageSize
			};
		}

        return axios(data);
    }
}
