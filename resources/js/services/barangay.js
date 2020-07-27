import axios from 'axios';
import store from "../store";

export default {
	getBarangays() {
        return axios({
            headers: {
                Authorization: 'Bearer ' + store.state.token,
                Accept: 'application/json',
            },
            method: 'get',
			url: '/api/barangay',
        });
    }
}
