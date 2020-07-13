<template>
	<a-layout id="dashboard-layout">

		<!-- LAYOUT SIDE MENU -->
		<a-layout-sider collapsible v-model="collapsed" :style="{ overflow: 'auto', height: '100vh', position: 'fixed', left: 0 }">
			<div class="logo">
				<!-- <span>ZVAP</span> -->
			</div>

			<a-menu theme="dark" :default-selected-keys="defaultActiveMenu" :selected-keys="defaultActiveMenu" :open-keys="defaultOpenKey"  mode="inline" @openChange="onOpenChange" >

				<template v-for="(item, index) in layoutMenu">

					<a-menu-item :key="index" v-if="item.sub_route === undefined">

						<router-link :to="{ name: item.route }">
							<a-icon :type="item.icon" />
							<span>
								{{ item.label }}
							</span>
						</router-link>
					</a-menu-item>

					<a-sub-menu :key="index" v-else>
						<span slot="title">
							<a-icon :type="item.icon" />
							<span>
								{{ item.label }}
							</span>
						</span>

						<a-menu-item :key="index + '.' + key" v-for="(submenu, key) in item.sub_route">
							<router-link :to="{ name: submenu.route }">
								<a-icon :type="submenu.icon" />
								<span>
									{{ submenu.label }}
								</span>
							</router-link>
						</a-menu-item>

					</a-sub-menu>

				</template>




			</a-menu>
		</a-layout-sider>


		<!-- DASHBOARD LAYOUT CONTENT -->
		<a-layout>
			<!-- LAYOUT HEADER -->
			<dashboard-header @toggleMenu="toggleMenu" />

			<!-- LAYOUT CONTENT -->
			<a-layout-content id="layout-content">


				<!-- <a-page-header v-show="showPageHeader" :title="pageTitle" @back="() => $router.go(-1)">
					<template slot="Title">
						{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
					</template>

				</a-page-header> -->

				<router-view></router-view>

			</a-layout-content>
		</a-layout>

	</a-layout>
</template>

<script>

import DashboardHeader from './partial/dashboardheader.vue';
import Helper from '../js/services/helper';
import Config from '../js/config/index';


export default {
	components: {
		DashboardHeader
	},
	beforeMount() {


		if (this.$route.name !== 'dashboard') {
			this.showDashboardDateRange = false;
			this.showPageHeader = true;
		} else {
			this.showDashboardDateRange = true;
			this.showPageHeader = false;
		}

		// console.log('Config: ', Config.layoutMenu);

		// console.log('this.$route.name: ', this.$route.name);

		this.layoutMenu = Config.layoutMenu;

		_.forEach(this.layoutMenu, this.iterateMenu);


		this.dashboardMenuActiveSwitch(this.$route.name);

	},
	watch: {
        $route(to, from) {

			// console.log('to.name: ', to.name === 'dashboard');

			if (to.name === 'dashboard') {
				this.showDashboardDateRange = true;
				this.showPageHeader = false;
			} else {
				this.showDashboardDateRange = true;
				this.showPageHeader = true;

			}

			this.dashboardMenuActiveSwitch(to.name);

		},
    },
	data() {
		return {


			pageTitle: '',
			defaultActiveMenu: ['1'],
			defaultOpenKey: [],
			rootSubmenuKeys: [],
			layoutMenu: [],
			activateByRouteMenu: [],
			showPageHeader: false,
			showDashboardDateRange: false,
			collapsed: false,
		};
	},
	methods: {
		toggleMenu(val){
			this.collapsed = val;
		},
		dashboardMenuActiveSwitch(activeMenuName) {

			let current_menu = _.find(this.activateByRouteMenu, { route: activeMenuName});

			// console.log('current_menu: ', current_menu);


			if (current_menu !== undefined) {
				this.defaultActiveMenu = [];
				this.defaultActiveMenu.push(current_menu.index);
				this.pageTitle = Helper.capitalizeFirstLetter(current_menu.label);
			}

			// console.log('this.defaultActiveMenu: ', this.defaultActiveMenu);

		},
		iterateMenu(item, index) {

			if (item.sub_route === undefined) {

				item.index = index;

				this.activateByRouteMenu.push(item);

			} else {

				item.index = index;

				this.rootSubmenuKeys.push(index);

				this.activateByRouteMenu.push(item);

				_.forEach(item.sub_route, (submenu, key) => {

					submenu.index = `${index}.${key}`

					this.activateByRouteMenu.push(submenu);
				})

			}

		},
		onOpenChange(openKeys) {

			const latestOpenKey = openKeys.find(key => this.defaultOpenKey.indexOf(key) === -1);

			if (this.rootSubmenuKeys.indexOf(latestOpenKey) === -1) {
				this.defaultOpenKey = openKeys;
			} else {
				this.defaultOpenKey = latestOpenKey ? [latestOpenKey] : [];
			}
		},
	}
};
</script>

<style lang="scss" scoped>
// #layout-content.ant-layout-content {
// }
</style>
