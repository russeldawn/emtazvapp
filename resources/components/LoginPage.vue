<template>
    <!-- <div>
        <a-button type="primary" @click="showConfirm">Primary</a-button>
		<a-button @click="info('tested this info modal')">Default</a-button>
		<a-button
			type="dashed"
			@click="success('Delete Map', 'Map Session deleted successfully')"
		>Dashed</a-button>
		<a-button
			type="danger"
			@click="warning('this is a random warning', 'told this is a warning!')"
		>Danger</a-button>
		<a-date-picker @change="onChange">
			<a-icon slot="suffixIcon" type="smile"/>
		</a-date-picker>
    </div> -->

	<!-- <div> -->
		<div id="container">
			<video id="background_video" loop muted></video>
			<div id="video_cover"></div>
			<div id="overlay"></div>

			<!-- <div id="video_controls">
				<span id="play">
					<img src="../images/play.png">
				</span>
				<span id="pause">
					<img src="../images/pause.png">
				</span>
			</div> -->

			<div id="login_content">
				<div id="head">
					<h1>ZVAPP</h1>
					<!-- <p class="sub_head">Mandaue ZVAPP Application</p> -->
					<!-- <p class="info">(Hold on! The video might take a while to load.)</p> -->
				</div>

				<!-- <div id="links">
					<a href="https://github.com/rishabhp/bideo.js">View on Github</a>
					<a href="http://codetheory.in/html5-fullscreen-background-video/">How it works</a>
				</div> -->
				<a-form
					id="components-form-demo-normal-login"
					:form="form"
					class="login-form"
					@submit="handleSubmit"
					>

					<a-form-item>
						<a-input
						v-decorator="['userName',{ rules: [{ required: true, message: 'Please input your username!' }] }]"
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
						<a-button type="primary" html-type="submit" class="login-form-button">Log in</a-button>Or
						<a href>register now!</a>
					</a-form-item>
				</a-form>
			</div>
		</div>

	<!-- </div> -->
</template>

<script>
import mixins from "../js/mixin";

export default {
	mixins: [mixins],
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
			this.form.validateFields((err, values) => {
				if (!err) {
					console.log("Received values of form: ", values);
					window.location.href = '/home';
				}
			});
		},
        // onChange(picked) {
		// 	console.log('picked date: ', picked);

		// },
    }
}
</script>

<style>

	.ant-checkbox-wrapper > span, .ant-form-item-children {
		color: #1890ff;
	}

	.ant-checkbox-wrapper > span:hover {
		color: #40a9ff;
	}

	#container {
		overflow: hidden;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
	}

	#background_video {
		position: absolute;

		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);

		object-fit: cover;
		height: 100%;
		width: 100%;
	}

	#video_cover {
		position: absolute;

		width: 100%;
		height: 100%;

		background: url('../images/video_cover.jpeg') no-repeat;
		background-size: cover;
		background-position: center;
	}

	#video_controls {
		position: absolute;
		left: 50%;
		transform: translate(-50%, 0);
	}

	#play img {
		width: 100px;
	}

	#pause img {
		width: 90px;
	}

	#pause {
		display: none;
	}

	@media (min-width: 768px) {
		#video_controls {
			display: none;
		}
	}

	#container {
		height: 100%;
	}

	#overlay {
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
		background: rgba(0, 0, 0, 0.5);
	}

	#login_content {
		z-index: 2;
		/* position: relative; */
		display: inline-block;

		/* Vertical center */
		top: 43%;
		/* transform: translateY(-50%); */
		transform: translate(-50%, -50%);
		left: 50%;
		position: absolute;
		padding: 15px;
	}

	#login_content h1 {
		color: rgba(249, 237, 2, 0.93);
		text-align: center;
		/* text-transform: uppercase; */
		font-weight: 600;
		font-family: 'proxima-nova-condensed', Helvetica;
		/* color: #fff; */
		font-size: 30px;
	}

	#login_content .sub_head {
		color: rgba(255, 255, 255, 0.5);
		font-size: 18px;
		/* font-size: 35px;
		font-family: 'proxima-nova-condensed', Helvetica;
		font-weight: 600; */
	}

	#login_content .info {
		color: rgba(255, 255, 255, 0.5);
		font-size: 12px;
		margin-top: 10px;
	}

	#links {
		margin-top: 50px;
	}

	#links a {
		border: 2px solid rgba(255, 255, 255, 0.20);
		border-radius: 61px;
		font-size: 12px;
		color: #FFFFFF;
		letter-spacing: 1px;
		text-decoration: none;
		text-transform: uppercase;
		padding: 10px 25px;
		display: inline-block;
		margin-right: 15px;
	}

</style>
