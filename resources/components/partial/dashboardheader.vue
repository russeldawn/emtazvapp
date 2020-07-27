<template>
	<a-layout-header style="background: #fff; padding: 0">

		<a-menu theme="light" v-model="current" mode="horizontal">
			<!-- <a-menu-item id="side-menu-trigger">
				<a-icon
					class="trigger"
					:type="hideMenu ? 'menu-unfold' : 'menu-fold'"
					@click="toggleMenu"
				/>
			</a-menu-item> -->

			<a-sub-menu id="user-menu">
				<span slot="title" class="submenu-title-wrapper">
					<a-icon type="setting" />
				</span>

				<a-menu-item-group title="Info">
					<a-menu-item key="setting:1">Users</a-menu-item>
					<a-menu-item key="setting:2">Permission</a-menu-item>
				</a-menu-item-group>

				<a-menu-item-group title="Config">
					<a-menu-item key="setting:3">Settings</a-menu-item>
					<a-menu-item key="setting:4" @click="logout">Logout</a-menu-item>
				</a-menu-item-group>
			</a-sub-menu>
		</a-menu>

	</a-layout-header>
</template>

<script>
import Auth from "../../js/services/auth";
export default {
	data() {
		return {
			hideMenu: false,
			current: ["mail"]
		};
	},
	methods: {
		toggleMenu() {

			this.hideMenu = !this.hideMenu;

			this.$emit('toggleMenu', this.hideMenu);
		},
		logout() {
			Auth.logout()
				.then(response => {

					if (response.data.status == 202) {
						this.$store.commit('logout');
						window.location.reload();
					}
				})
				.catch(error => {
					console.log('error: ', error);
				})
		}
	}
};
</script>
