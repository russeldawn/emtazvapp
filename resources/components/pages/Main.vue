<template>
	<div>
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

		<div id="components-grid">

			<a-row :gutter="[16, 16]">

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="file" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									New Records: {{ transaction.counters.new }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit newly created.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="calendar" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									Endosement Progress: {{ transaction.counters.endorsementinprogress }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit endorsement in progress.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="book" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									Endosed: {{ transaction.counters.endorsed }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit endorsed.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="credit-card" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									Denied: {{ transaction.counters.denied }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit denied.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="carry-out" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									Approval Progress: {{ transaction.counters.approvalinprogress }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit approval in progress.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

				<a-col :span="8">
					<a-card hoverable :loading="loading">

						<span class="dashboard-icon">
							<a-icon slot="icon" type="carry-out" />
						</span>

						<a-card-meta>
							<template slot="title">
								<span>
									Approved: {{ transaction.counters.approved }}
								</span>
							</template>

							<template slot="description">
								<span>
									Number of Business Permit approved.
								</span>
							</template>
						</a-card-meta>

					</a-card>
				</a-col>

			</a-row>

		</div>
	</div>

</template>

<script>
import { mapState } from "vuex";
import moment from 'moment';
import Helper from "../../js/services/helper";
import Dashboard from "../../js/services/dashboard";

export default {
	beforeMount() {

		if (this.$route.name !== 'dashboard') {
			this.showDashboardDateRange = false;
			this.showPageHeader = false;
		} else {
			this.showDashboardDateRange = true;
			this.showPageHeader = true;
		}

		let dateRange = {
			"start_date": moment().subtract(7, 'days').format('MMMM DD, YYYY'),
			"end_date": moment().format('MMMM DD, YYYY')
		};

		Dashboard.getCounters(dateRange)
				.then(response => {
					console.log('Created counters: ', response);

					if (response.data.status === 200) {
						this.$store.commit('saveDashboardCounter', response.data.data);

						this.transaction.counters = response.data.data.transactions;
					}

				})
				.catch(error => {
					console.log('error: ', error);

				})

		this.pageTitle = Helper.capitalizeFirstLetter(this.$route.name);

	},
	mounted() {
		setTimeout(() => {
			this.handleClick();
		}, 2000);
	},

	data() {
		return {
			loading: true,
			showDashboardDateRange: true,
			showPageHeader: true,
			pageTitle: '',
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
			transaction: {
				counters: {
					approvalinprogress: 0,
					approved: 0,
					denied: 0,
					endorsed: 0,
					endorsementinprogress: 0,
					new: 0,
				}
			}
		};
	},
	methods: {
		disabledDate(current) {
			// Can not select days before today and today
			return current > moment().endOf('day');
		},
		onChange(dates, dateStrings) {
			console.log('From: ', dates[0], ', to: ', dates[1]);
			console.log('From: ', dateStrings[0], ', to: ', dateStrings[1]);

			let dateRange = {
				"start_date": dateStrings[0],
				"end_date": dateStrings[1]
			};

			Dashboard.getCounters(dateRange)
				.then(response => {
					console.log('Dashboard.getCounters counters: ', response);

					if (response.data.status === 200) {
						this.$store.commit('saveDashboardCounter', response.data.data);
						this.transaction.counters = response.data.data.transactions;
					}

				})
		},
		handleClick() {
			this.loading = !this.loading;
		},
	},
};

</script>

<style scoped>
#components-grid [class~='ant-col'] {
  background: transparent;
  border: 0;
}
#components-grid [class~='ant-col'] > div {
  background: #00a0e9;
  height: 120px;
  line-height: 120px;
  font-size: 13px;
}
#components-grid pre {
  background: #f9f9f9;
  border-radius: 6px;
  font-size: 13px;
  padding: 8px 16px;
}
</style>
