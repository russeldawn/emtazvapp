<template>
	<div id="user-list-table">

		<div>
			<a-button class="editable-add-btn" @click="handleAdd">
				Add
			</a-button>
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
								<!-- {{ value.toUpperCase() }} -->
							{{ key }}
						</a-tag>
					</template>
				</span>

				<span slot="action" slot-scope="text, record">
					<a class="ant-dropdown-link">
						Actions
						<a-icon type="down" />
					</a>
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

		this.getUsers(this.currentPage, this.pageSize);

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
			modal2Visible: false
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
				pageSize = pageSize;
				payload.pageSize = pageSize;
			}

			User.getUsers(payload)
			.then(response => {
				console.log('response: ', response);

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
