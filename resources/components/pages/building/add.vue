<template>
	<div>
		<div>
			<a-page-header :title="pageTitle" @back="() => $router.go(-1)">
				<template slot="Title">
					{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
				</template>

				<template slot="extra">

					<template v-if="tabIndex == 1">
						<a-button type="primary" @click="handleAdd">
							Endorse
						</a-button>

						<a-button type="primary" @click="handleAdd">
							Approve
						</a-button>
					</template>

					<template v-if="tabIndex == 2">
						<a-button type="primary" @click="handleAdd">
							Add
						</a-button>
					</template>



				</template>

			</a-page-header>
		</div>

		<div>

			<a-tabs default-active-key="1" @change="changeTab">
				<a-tab-pane key="1" tab="New Form">
					<form-fields />
				</a-tab-pane>

				<a-tab-pane key="2" tab="Conditions" force-render class="add-zoning-conditions">
					<condition />
				</a-tab-pane>

			</a-tabs>

		</div>

	</div>

</template>


<script>
import Helper from '../../../js/services/helper';
import Condition from "./partial/condition.vue";
import FormFields  from "./partial/FormFields.vue";


export default {
	components: {
		Condition,
		FormFields
	},
	created() {
		this.pageTitle = Helper.capitalizeFirstLetter(this.$route.name);


	},
	data() {
		return {
			tabIndex: 1,
		};
	},
	methods: {
		changeTab(tabIndex){
			console.log('tabIndex: ', tabIndex);

			this.tabIndex = tabIndex;

		},

	}
};
</script>
