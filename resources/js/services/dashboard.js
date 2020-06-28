import axios from 'axios';
import store from "../store";

export default {
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
