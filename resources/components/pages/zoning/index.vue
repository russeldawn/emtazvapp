<template>
	<div id="user-list-table">

		<div>
			<a-page-header v-if="showPageHeader" :title="pageTitle" @back="() => $router.go(-1)">
				<template slot="Title">
					{{ this.$route.name == 'main' ? 'Dashboard' : this.$route.name }}
				</template>

				<template slot="extra">

					<a-button type="primary" @click="handleAdd">
						Add
					</a-button>

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
				<span slot="customTitle">User ID </span>
				<a slot="userid" slot-scope="text">{{ text }}</a>

				<span slot="customStatus" slot-scope="text, index">
					<a-badge :status=" text === true ? 'success' : 'error'" />
						{{ text === true ? 'Active' : 'Inactive' }}
				</span>

				<span slot="tags" slot-scope="tags">
					<template v-for="(value, key) in tags" >
						<a-tag
							:key="key"
							v-show="value === true"
							:color="colorTagging(key)"
						>
							{{ key }}
						</a-tag>
					</template>
				</span>

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

const columns = [
	{
		title: "Transaction #",
		dataIndex: "transactionid",
		key: "transactionid",
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
		dataIndex: "companyname",
		key: "companyname",
	},
	{
		title: "Status",
		dataIndex: "status",
		key: "status",
	},
	{
		title: "POC",
		dataIndex: "userid",
		key: "userid",
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
		return {
			data: [],
			columns,
			userTotal: 0,
			pageSize: 10,
			currentPage: 1,
			pageSizeOptions: ['5','10','15', '20', '30'],
			searchInput: null,
			modal2Visible: false,
			showPageHeader: false,
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
		editRow(data) {
			console.log('edit!!');
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

				console.log('response: ', response);


				if (response.status === 200) {

					// let cloneData = Object.assign({}, response.data);
					// this.data = [];

					// this.currentPage = cloneData.current_page;

					// cloneData.data.map(user => {

					// 	let newData = {};
					// 	let tags = {};

					// 	newData = {
					// 		key: user.id,
					// 		...user
					// 	};

					// 	_.forEach(user, function(value, key) {

					// 		switch (key) {
					// 			case 'isadmin':
					// 				tags[key] = value;
					// 				break;

					// 			case 'canreview':
					// 				tags[key] = value;
					// 				break;

					// 			case 'canapprove':
					// 				tags[key] = value;
					// 				break;
					// 		}
					// 	});

					// 	newData.tags = tags;



					// 	this.data.push(newData);

					// });
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
</style>
