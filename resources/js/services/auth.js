import axios from 'axios';

export default {
    login(data) {
        return axios({
            method: 'post',
            url: env + '/api/login',
            data: data
        });
    },
    logout() {

        return axios({
            method: 'get',
            url: env + '/api/logout'
        });

    },
    getUser() {
        return axios({
            headers: {
                Authorization: 'Bearer ' + store.state.token,
                Accept: 'application/json',
            },
            method: 'get',
            url: env + '/api/me',
        });
    }
}
