import axios from 'axios';
import store from "../store";

export default {
	getTransactions(payload) {

		let data = {
			headers: {
				Authorization: 'Bearer ' + store.state.token,
				Accept: 'application/json',
			},
			method: 'GET',
			url: '/api/transaction',
		};


		if (payload.query != '') {
			data.url += payload.query;
		}

        return axios(data);
    }
}
