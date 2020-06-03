<template>
	<a-layout-header style="background: #fff; padding: 0">

		<a-menu theme="light" v-model="current" mode="horizontal">
			<a-menu-item id="side-menu-trigger">
				<a-icon
					class="trigger"
					:type="hideMenu ? 'menu-unfold' : 'menu-fold'"
					@click="toggleMenu"
				/>
			</a-menu-item>

			<a-sub-menu id="user-menu">
				<span slot="title" class="submenu-title-wrapper">
					User <a-icon type="setting" />

				</span>

				<a-menu-item-group title="Info">
					<a-menu-item key="setting:1">Users</a-menu-item>
					<a-menu-item key="setting:2">Permission</a-menu-item>
				</a-menu-item-group>

				<a-menu-item-group title="Config">
					<a-menu-item key="setting:3">Settings</a-menu-item>
					<a-menu-item key="setting:4">Logout</a-menu-item>
				</a-menu-item-group>
			</a-sub-menu>
		</a-menu>

	</a-layout-header>
</template>

<script>
export default {
	data() {
		return {
			hideMenu: false,
			current: ["mail"]
		};
	},
	methods: {
		toggleMenu() {
			console.log('this.hideMenu before: ', this.hideMenu);
			this.hideMenu = !this.hideMenu;
			console.log('this.hideMenu after: ', this.hideMenu);

			this.$emit('toggleMenu', this.hideMenu);
		}
	}
};
</script>
