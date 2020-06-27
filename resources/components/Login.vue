<template>

    <div id="container">
        <!-- this is the login page -->
        <video id="background_video" loop muted></video>
        <div id="video_cover"></div>
        <div id="overlay"></div>

        <div id="login_content">
            <div id="head">
                <h1>EMTA SERVICES</h1>
                <p class="sub_head">Mandaue ZVAPP Application</p>
                <!-- <p class="info">(Hold on! The video might take a while to load.)</p> -->
            </div>
            <a-form
                id="login-component"
                :form="form"
                class="login-form"
                @submit="handleSubmit"
                >

                <a-form-item>
                    <a-input
                    v-decorator="['username',{ rules: [{ required: true, message: 'Please input your username!' }] }]"
                    placeholder="Username"
                    >
                    <a-icon slot="prefix" type="user" style="color: rgba(0,0,0,.25)"/>
                    </a-input>
                </a-form-item>

                <a-form-item>
                    <a-input
                    v-decorator="['password',{ rules: [{ required: true, message: 'Please input your Password!' }] }]"
                    type="password"
                    placeholder="Password"
                    >
                    <a-icon slot="prefix" type="lock" style="color: rgba(0,0,0,.25)"/>
                    </a-input>
                </a-form-item>

                <a-form-item>
                    <a-checkbox v-decorator="['remember',{valuePropName: 'checked',initialValue: true,}]">Remember me</a-checkbox>
                    <a class="login-form-forgot" href>Forgot password</a>
                    <a-button type="primary" html-type="submit" class="login-form-button">Log in</a-button>
                    <!-- Or
                    <a href>register now!</a> -->
                </a-form-item>
            </a-form>
        </div>

    </div>

</template>

<script>
import videoInit from "../js/bideo";
import initialize from "../js/main";
import Auth from "../js/services/auth";

export default {
    beforeCreate() {
        this.form = this.$form.createForm(this);
    },
	mounted() {

        videoInit();
		initialize();


	},
	data() {
		return {
		}
	},
    methods: {
		handleSubmit(e) {
			e.preventDefault();
			this.form.validateFields((err, values) => {
				console.log("values from form: ", values);
				console.log('err: ', err);
				console.log('!err: ', !err);

				if (!err) {
					// window.location.href = '/dashboard';

					Auth.login(values)
					.then(response => {

						console.log('Login response: ', response);


						if (response.status === 200) {

							this.$store.commit('saveAuthentication', response.data)

							return Auth.getUser();
						}
					})
					.then( response => {

						if (response.status === 200) {

							this.$store.commit('saveAuthenticatedUser', response.data.data.user)

							this.$router.push({ name: 'dashboard' });

						}
					})
					.catch(err => {
						console.log('Error: ', err);
                    });


				}
			});

		},
    }
}
</script>

<style lang='scss' scoped>

* {
    margin: 0;
    padding: 0;
}

html,
body {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

/* Demo page specific styles */

body {
    text-align: center;
	font-family: 'proxima-nova', Helvetica;
}


</style>
