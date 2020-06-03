<template>
	<a-layout id="dashboard-layout">
		<a-layout-sider :trigger="null" collapsible v-model="collapsed">
			<div class="logo">
				<span>ZVAP</span>
			</div>

			<a-menu theme="dark" mode="inline" :defaultSelectedKeys="['1']">

				<a-menu-item key="1">
					<router-link :to="{ name: 'main' }">
						<a-icon type="user" />
						<span>
							User
						</span>
					</router-link>
				</a-menu-item>

				<a-sub-menu key="2">

					<span slot="title">
						<a-icon type="environment" />
						<span>Zoning</span>
					</span>

					<a-menu-item key="2a">
						<router-link :to="{ name: 'home' }">
							<a-icon type="environment" />
							Add / Modify
						</router-link>
					</a-menu-item>

					<a-menu-item key="2b">
						<router-link :to="{ name: 'home' }">
							<a-icon type="environment" />
							Endorse
						</router-link>
					</a-menu-item>

					<a-menu-item key="3c">
						<router-link :to="{ name: 'home' }">
							<a-icon type="environment" />
							Approve
						</router-link>
					</a-menu-item>

				</a-sub-menu>

				<!-- <a-menu-item key="2">
					<router-link :to="{ name: 'home' }">
						<a-icon type="environment" />
						<span>
							Zoning
						</span>
					</router-link>
				</a-menu-item> -->

				<a-menu-item key="3">
					<router-link :to="{ name: 'header' }">
						<a-icon type="compass" />
						<span>
							Land Use
						</span>
					</router-link>
				</a-menu-item>


				<a-sub-menu key="4">

					<span slot="title">
						<a-icon type="bank" />
						<span>Business</span>
					</span>

					<a-menu-item key="4a">
						<router-link :to="{ name: 'sidemenu' }">
							<a-icon type="bank" />
							Add / Modify
						</router-link>
					</a-menu-item>

					<a-menu-item key="4b">
						<router-link :to="{ name: 'sidemenu' }">
							<a-icon type="bank" />
							Approve
						</router-link>
					</a-menu-item>

				</a-sub-menu>


				<a-menu-item key="5">
					<router-link :to="{ name: 'sidemenu' }">
						<a-icon type="dollar" />
						<span>
							Payment
						</span>
					</router-link>
				</a-menu-item>
			</a-menu>
		</a-layout-sider>

		<a-layout>
			<Header @toggleMenu="toggleMenu" />

			<a-layout-content
				:style="{
					margin: '24px 16px',
					padding: '24px',
					background: '#fff',
					minHeight: '280px'
				}"
			>
				Content
				<router-view></router-view>
			</a-layout-content>
		</a-layout>
	</a-layout>
</template>

<script>
import Header from "./Partials/Header";

export default {
	components: {
		Header
	},
	data() {
		return {
			collapsed: false
		};
	},
	methods: {
		toggleMenu(val){
			console.log('val: ', val);
			this.collapsed = val;
		}
	}
};
</script>

<style></style>
