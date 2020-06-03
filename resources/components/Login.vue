<template>

    <div id="container">
        <!-- this is the login page -->
        <video id="background_video" loop muted></video>
        <div id="video_cover"></div>
        <div id="overlay"></div>

        <div id="login_content">
            <div id="head">
                <h1>ZVAPP</h1>
                <!-- <p class="sub_head">Mandaue ZVAPP Application</p> -->
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
                    v-decorator="['email',{ rules: [{ required: true, message: 'Please input your email!' }] }]"
                    placeholder="Email"
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

export default {
	beforeCreate() {
		this.form = this.$form.createForm(this);
	},
	data() {
		return {
		}
	},
    methods: {
		handleSubmit(e) {
			e.preventDefault();
			// this.form.validateFields((err, values) => {
			// 	console.log("Received values of form: ", values);
			// 	console.log('err: ', err);
			// 	console.log('!err: ', !err);

			// 	if (!err) {
			// 		// window.location.href = '/dashboard';
			// 		// axios.post('api/login', values)
			// 		// .then(response => {
			// 		// 	console.log('Reponse: ', response);
			// 		// 	if (response.status === 200) {
			// 		// 		router.push('/dashboard');
			// 		// 	}
			// 		// })
			// 		// .catch(err => {
			// 		// 	console.log('Error: ', err);
            //         // });


			// 	}
			// });
            this.$router.push('/dashboard');
		},
        // onChange(picked) {
		// 	console.log('picked date: ', picked);

		// },
    }
}
</script>

<style scoped>

</style>
