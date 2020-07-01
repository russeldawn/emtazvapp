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

						<a-menu slot="overlay" @click="onClick">
							<a-menu-item key="1" @click="editRow(record)">
								Edit
							</a-menu-item>

							<a-menu-item key="2" @click="viewRow(record)">
								View
							</a-menu-item>

							<a-menu-item key="3" @click="editRow(record)">
								Delete
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
import User from "../../../js/services/users";
import Helper from '../../../js/services/helper';

const columns = [
	{
		dataIndex: "userid",
		key: "userid",
		slots: { title: "customTitle" },
		scopedSlots: {
			filterDropdown: 'filterDropdown',
			filterIcon: 'filterIcon',
			customRender: "userid"
		}
	},
	{
		title: "Username",
		dataIndex: "username",
		key: "username",
		scopedSlots: {
			filterDropdown: 'filterDropdown',
			filterIcon: 'filterIcon',
		}
	},
	{
		title: "Status",
		dataIndex: "isactive",
		key: "isactive",
		scopedSlots: {
			filterDropdown: 'filterDropdown',
			filterIcon: 'filterIcon',
			customRender: "customStatus"
		}
	},
	{
		title: "Authorization",
		dataIndex: "tags",
		key: "tags",
		scopedSlots: {
			customRender: "tags"
		}
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

		this.getUsers(this.currentPage, this.pageSize);
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
		},
		viewRow(data) {
			console.log('view!!');
		},
		deleteRow(data) {
			console.log('delete!!');
		},
		onClick({ key }) {
			console.log(`Click on item ${key}`);
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
			this.modal2Visible = true;
			const { count, dataSource } = this;
			const newData = {
				key: count,
				name: `Edward King ${count}`,
				age: 32,
				address: `London, Park Lane no. ${count}`,
			};

			console.log('count: ', count);
			console.log('dataSource: ', dataSource);

		},
		showTotal(total, range) {
			return `${range[0]}-${range[1]} of ${total} items`;
		},
		onShowSizeChange(current, pageSize) {
			console.log(`current: ${current}, pageSize: ${pageSize}`);
			this.currentPage = current;
			this.pageSize = pageSize;

			this.getUsers(this.currentPage, this.pageSize);
		},
		changePagination(page, pageSize) {
			console.log(`page: ${page}, pageSize: ${pageSize}`);
			this.currentPage = page;
			this.pageSize = pageSize;

			this.getUsers(this.currentPage, this.pageSize);
		},
		getUsers(currentPage = null, pageSize = null) {

			let query = '';
			let payload = {};

			if (currentPage != null) {
				query = '?page=' + currentPage;
				payload.query = query;
			}

			if (pageSize != null) {
				payload.query += '&page_size=' + pageSize;
			}

			User.getUsers(payload)
			.then(response => {

				if (response.status === 200) {

					let cloneData = Object.assign({}, response.data);
					this.data = [];

					this.currentPage = cloneData.current_page;

					cloneData.data.map(user => {

						let newData = {};
						let tags = {};

						newData = {
							key: user.id,
							...user
						};

						_.forEach(user, function(value, key) {

							switch (key) {
								case 'isadmin':
									tags[key] = value;
									break;

								case 'canreview':
									tags[key] = value;
									break;

								case 'canapprove':
									tags[key] = value;
									break;
							}
						});

						newData.tags = tags;



						this.data.push(newData);

					});
					// this.data = response.data.data;
					this.userTotal = response.data.total;
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
