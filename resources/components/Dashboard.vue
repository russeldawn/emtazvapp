<template>
	<a-layout id="dashboard-layout">

		<!-- LAYOUT SIDE MENU -->
		<a-layout-sider collapsible v-model="collapsed">
			<div class="logo">
				<!-- <span>ZVAP</span> -->
			</div>

			<a-menu theme="dark" :default-selected-keys="defaultActiveMenu" :selected-keys="defaultActiveMenu" :open-keys="defaultOpenKey"  mode="inline" @openChange="onOpenChange" >

				<template v-for="(item, index) in layoutMenu">

					<a-menu-item :key="index" v-if="item.sub_route === undefined">
						<!-- v-if="item.sub_route === undefined" -->
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
			<Header @toggleMenu="toggleMenu" />

			<!-- LAYOUT CONTENT -->
			<a-layout-content
				:style="{
					margin: '24px 16px',
					padding: '24px',
					background: '#fff',
					minHeight: '280px'
				}"
			>


				<a-page-header v-if="showPageHeader" :title="pageTitle" @back="() => $router.go(-1)">
					<template slot="Title">
						{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
					</template>

					<template slot="extra" v-if="showDashboardDateRange">

						<a-range-picker
							v-model="defaultDateRange"
							:disabled-date="disabledDate"
							:format="dateFormat"
							:ranges="dateRanges"
							@change="onChange"
						>
							<a-icon slot="suffixIcon" type="calendar" />
						</a-range-picker>

					</template>

				</a-page-header>

				<router-view></router-view>

			</a-layout-content>
		</a-layout>

	</a-layout>
</template>

<script>
import moment from 'moment';
import Header from "./partials/Header";
import Helper from '../js/services/helper';
import Config from '../js/config/index';


export default {
	components: {
		Header
	},
	beforeMount() {
		this.showPageHeader = true;

		if (this.$route.name !== 'dashboard') {
			this.showDashboardDateRange = false;
		} else {
			this.showDashboardDateRange = true;
		}

		// console.log('Config: ', Config.layoutMenu);

		console.log('this.$route.name: ', this.$route.name);

		this.layoutMenu = Config.layoutMenu;

		_.forEach(this.layoutMenu, this.iterateMenu);


		this.dashboardMenuActiveSwitch(this.$route.name);

	},
	watch: {
        $route(to, from) {

			console.log('to.name: ', to.name === 'dashboard');

			if (to.name === 'dashboard') {
				this.showDashboardDateRange = true;
			} else {
				this.showDashboardDateRange = false;

			}

			this.dashboardMenuActiveSwitch(to.name);

		},
    },
	data() {
		return {
			dateFormat: 'LL',
			defaultDateRange: [
				moment().subtract(7, 'days'),
				moment()
			],
			dateRanges: {
				Today: [
					moment(),
					moment()
				],
				'This Month': [
					moment(),
					moment().endOf('month')
				]
			},
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
		moment,
		disabledDate(current) {
			// Can not select days before today and today
			return current > moment().endOf('day');
		},
		onChange(dates, dateStrings) {
			console.log('From: ', dates[0], ', to: ', dates[1]);
			console.log('From: ', dateStrings[0], ', to: ', dateStrings[1]);
		},
		toggleMenu(val){
			this.collapsed = val;
		},
		dashboardMenuActiveSwitch(activeMenuName) {

			let current_menu = _.find(this.activateByRouteMenu, { route: activeMenuName});

			console.log('current_menu: ', current_menu);


			if (current_menu !== undefined) {
				this.defaultActiveMenu = [];
				this.defaultActiveMenu.push(current_menu.index);
				this.pageTitle = Helper.capitalizeFirstLetter(current_menu.label);
			}

			console.log('this.defaultActiveMenu: ', this.defaultActiveMenu);

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

<style>
</style>
