<template>
	<div id="user-list-table">

		<div>
			<a-page-header v-if="showPageHeader" :title="pageTitle" @back="() => $router.go(-1)">
				<template slot="Title">
					{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
				</template>

				<template slot="extra">


					<a-button type="primary" @click="handleAdd">
						New
					</a-button>

					<a-button type="primary" @click="handleAdd">
						Filter
					</a-button>

					<!-- <a-input-group compact>
						<a-select default-value="Option1">
							<a-select-option value="Option1">
								Transaction #
							</a-select-option>

							<a-select-option value="Option2">
								Applicant
							</a-select-option>

							<a-select-option value="Option3">
								Class
							</a-select-option>

							<a-select-option value="Option4">
								Status
							</a-select-option>
						</a-select>

						<a-input style="width: 50%" default-value="input content" />

						<a-button type="primary" @click="handleAdd">
							Search
						</a-button>
					</a-input-group> -->

				</template>

			</a-page-header>
		</div>

		<div>
			<a-table
				:row-selection="rowSelection"
				:columns="columns"
				:data-source="data"
				:pagination="false"
			>

				<div
					slot="filterDropdown"
					slot-scope="{ setSelectedKeys, selectedKeys, confirm, clearFilters, column }"
					style="padding: 8px"
				>
					<a-input
						v-ant-ref="c => (searchInput = c)"
						:placeholder="`Search ${column.dataIndex}`"
						:value="selectedKeys[0]"
						style="width: 188px; margin-bottom: 8px; display: block;"
						@change="e => setSelectedKeys(e.target.value ? [e.target.value] : [])"
						@pressEnter="() => handleSearch(selectedKeys, confirm, column.dataIndex)"
					/>
					<a-button
						type="primary"
						icon="search"
						size="small"
						style="width: 90px; margin-right: 8px"
						@click="() => handleSearch(selectedKeys, confirm, column.dataIndex)"
					>
						Search
					</a-button>
					<a-button size="small" style="width: 90px" @click="() => handleReset(clearFilters)">
						Reset
					</a-button>
				</div>

				<a-icon
					slot="filterIcon"
					slot-scope="filtered"
					type="search"
					:style="{ color: filtered ? '#108ee9' : undefined }"
				/>

				<template slot="customRender" slot-scope="text, record, index, column">
					<span v-if="searchText && searchedColumn === column.dataIndex">
						<template
							v-for="(fragment, i) in text
								.toString()
								.split(new RegExp(`(?<=${searchText})|(?=${searchText})`, 'i'))"
						>
							<mark
								v-if="fragment.toLowerCase() === searchText.toLowerCase()"
								:key="i"
								class="highlight"
							>
								{{ fragment }}
							</mark>
							<template v-else>{{ fragment }}</template>
						</template>
					</span>
					<template v-else>
						{{ text }}
					</template>
				</template>

				<span slot="action" slot-scope="record">
					<a-dropdown>
						<a class="ant-dropdown-link" @click="e => e.preventDefault()">
							<a-icon type="ellipsis" />
							<a-icon type="down" />
						</a>

						<a-menu slot="overlay">
							<a-menu-item key="1" @click="editRow(record)">
								Edit
							</a-menu-item>

							<a-menu-item key="2" @click="endorseRow(record)">
								Endorse
							</a-menu-item>

							<a-menu-item key="3" @click="approveRow(record)">
								Approve
							</a-menu-item>
						</a-menu>

					</a-dropdown>
				</span>
			</a-table>

		</div>

		<div>
			<a-pagination
				:current="currentPage"
				show-size-changer
				:show-total="showTotal"
				:default-current="1"
				:total="userTotal"
				@showSizeChange="onShowSizeChange"
				@change="changePagination"
				:pageSizeOptions="pageSizeOptions"
				:pageSize="pageSize"
			/>
		</div>


		<a-modal
			v-model="modal2Visible"
			title="Vertically centered modal dialog"
			centered
			@ok="() => (modal2Visible = false)"
		>
			<p>some contents...</p>
			<p>some contents...</p>
			<p>some contents...</p>
		</a-modal>

	</div>
</template>

<script>
import Transaction from "../../../js/services/transaction";
import Helper from '../../../js/services/helper';
import Moment from "moment";

const columns = [
	{
		title: "Transaction #",
		dataIndex: "transactionid.modified_id",
		key: "transactionid.modified_id",
		slots: { title: "customId" },
	},
	{
		title: "Date Applied",
		dataIndex: "dateapplied",
		key: "dateapplied",
	},
	{
		title: "Applicant",
		dataIndex: "name_of_applicant",
		key: "name_of_applicant",
	},
	{
		title: "Company Name",
		dataIndex: "companyname",
		key: "companyname",
	},
	{
		title: "Barangay",
		dataIndex: "barangay.barangay_name",
		key: "barangay.barangay_name",
	},
	{
		title: "Status",
		dataIndex: "status",
		key: "status",
	},
	{
		title: "POC",
		dataIndex: "authorizedrep",
		key: "authorizedrep",
	},
	{
		title: "Action",
		key: "action",
		scopedSlots: {
			customRender: "action"
		}
	}
];

export default {
	created() {

		if (this.$route.name !== 'dashboard') {
			this.showPageHeader = true;
		} else {
			this.showPageHeader = false;
		}

		this.transaction(this.currentPage, this.pageSize);
		this.pageTitle = Helper.capitalizeFirstLetter(this.$route.name);
	},
	data() {

		// const custom = {
		// 	scopedSlots: {
		// 		filterDropdown: 'filterDropdown',
		// 		filterIcon: 'filterIcon',
		// 		customRender: 'customRender',
		// 	},
		// 	onFilter: (value, record) =>
		// 		record.name
		// 			.toString()
		// 			.toLowerCase()
		// 			.includes(value.toLowerCase()),
		// 	onFilterDropdownVisibleChange: visible => {
		// 		if (visible) {
		// 			setTimeout(() => {
		// 				this.searchInput.focus();
		// 			}, 0);
		// 		}
		// 	},
		// }

		// columns.map(column => {

		// 	if (column.key !== 'userid' && column.key !== 'action') {
		// 		column.scopedSlots = custom.scopedSlots;
		// 		column.onFilter = custom.onFilter;
		// 		column.onFilterDropdownVisibleChange = custom.onFilterDropdownVisibleChange;
		// 	}
		// })

		return {
			data: [],
			columns,
			userTotal: 0,
			pageSize: 10,
			currentPage: 1,
			pageSizeOptions: ['5','10','15', '20', '30'],
			modal2Visible: false,
			showPageHeader: false,
			searchText: '',
			searchInput: null,
			searchedColumn: '',
		};
	},
	computed: {
		rowSelection() {
			return {
				onChange: (selectedRowKeys, selectedRows) => {
					console.log(`selectedRowKeys: ${selectedRowKeys}`, 'selectedRows: ', selectedRows);
				},
				getCheckboxProps: record => ({
					props: {
						disabled: record.name === 'Disabled User', // Column configuration not to be checked
						name: record.name,
					},
				}),
			};
		},
	},
	watch: {
		pageSize(val) {
			console.log('pageSize', val);
			this.pageSize = val;
		},
		current(val) {
			console.log('current', val);
			this.currentPage = val;
		},
	},
	methods: {
		onSearch(value) {
			console.log(value);
		},
		// handleSearch(selectedKeys, confirm, dataIndex) {
		// 	confirm();
		// 	this.searchText = selectedKeys[0];
		// 	this.searchedColumn = dataIndex;
		// },

		// handleReset(clearFilters) {
		// 	clearFilters();
		// 	this.searchText = '';
		// },
		editRow(data) {
			console.log('edit!!');
			console.log('edit data: ', data);
			this.$router.push({ name: 'add_zoning' });
		},
		endorseRow(data) {
			console.log('view!!');
		},
		approveRow(data) {
			console.log('delete!!');
		},
		colorTagging(key) {

			switch (key) {
				case 'isadmin':
					return 'green';
					break;

				case 'canreview':
					return 'geekblue';
					break;

				case 'canapprove':
					return 'volcano';
					break;

			}
		},
		handleAdd() {
			this.$router.push({ name: 'add_zoning' });

		},
		showTotal(total, range) {
			return `${range[0]}-${range[1]} of ${total} items`;
		},
		onShowSizeChange(current, pageSize) {
			console.log(`current: ${current}, pageSize: ${pageSize}`);
			this.currentPage = current;
			this.pageSize = pageSize;

			this.transaction(this.currentPage, this.pageSize);
		},
		changePagination(page, pageSize) {
			console.log(`page: ${page}, pageSize: ${pageSize}`);
			this.currentPage = page;
			this.pageSize = pageSize;

			this.transaction(this.currentPage, this.pageSize);
		},
		transaction(currentPage = null, pageSize = null) {

			let query = '';
			let payload = {};

			if (currentPage != null) {
				query = '?page=' + currentPage;
				payload.query = query;
			}

			if (pageSize != null) {
				payload.query += '&page_size=' + pageSize;
			}

			Transaction.getTransactions(payload)
			.then(response => {

				if (response.status === 200) {

					console.log('response: ', response);

					let cloneData = Object.assign({}, response.data);
					this.data = [];

					this.currentPage = cloneData.current_page;
					this.userTotal = cloneData.total

					cloneData.data.map(transaction => {

						let new_data = {};
						let str_to_date = null;
						let date_applied = null;

						// str_to_date = Moment(transaction.dateapplied).format('DDMMYYYY');
						// date_applied = Moment(transaction.dateapplied).format('L');

						new_data = {
							key: transaction.transactionid,
							// trans_num: `MCT#-${str_to_date}-${transaction.transactionid}`,
							// date_applied: date_applied,
							...transaction
						};

						this.data.push(new_data);

					});
					// // this.data = response.data.data;
					// this.userTotal = response.data.total;
				}

			})
			.catch(error => {
				console.log('error: ', error);

			})
		}
	},
};
</script>

<style lang='scss' scoped>
tr:last-child td {
	padding-bottom: 0;
}

.highlight {
	background-color: rgb(255, 192, 105);
	padding: 0px;
}
</style>
