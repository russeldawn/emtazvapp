<template>
	<div id="user-list-table">
		<a-table :row-selection="rowSelection" :columns="columns" :data-source="data">
			<a slot="name" slot-scope="text">{{ text }}</a>
			<span slot="customTitle">Name </span>
			<span slot="tags" slot-scope="tags">
				<a-tag
					v-for="tag in tags"
					:key="tag"
					:color="
						tag === 'loser'
							? 'volcano'
							: tag.length > 5
							? 'geekblue'
							: 'green'
					"
					>{{ tag.toUpperCase() }}</a-tag
				>
			</span>
			<span slot="action" slot-scope="text, record">
				<a>Invite 一 {{ record.name }}</a>
				<a-divider type="vertical" />
				<a>Delete</a>
				<a-divider type="vertical" />
				<a class="ant-dropdown-link">
					More actions
					<a-icon type="down" />
				</a>
			</span>
		</a-table>
	</div>
</template>

<script>
const columns = [
	{
		dataIndex: "name",
		key: "name",
		slots: { title: "customTitle" },
		scopedSlots: { customRender: "name" }
	},
	{
		title: "Age",
		dataIndex: "age",
		key: "age"
	},
	{
		title: "Address",
		dataIndex: "address",
		key: "address"
	},
	{
		title: "Tags",
		key: "tags",
		dataIndex: "tags",
		scopedSlots: { customRender: "tags" }
	},
	{
		title: "Action",
		key: "action",
		scopedSlots: { customRender: "action" }
	}
];

const data = [
	{
		key: "1",
		name: "John Brown",
		age: 32,
		address: "New York No. 1 Lake Park",
		tags: ["nice", "developer"]
	},
	{
		key: "2",
		name: "Jim Green",
		age: 42,
		address: "London No. 1 Lake Park",
		tags: ["loser"]
	},
	{
		key: "3",
		name: "Joe Black",
		age: 32,
		address: "Sidney No. 1 Lake Park",
		tags: ["cool", "teacher"]
	}
];

export default {
	data() {
		return {
			data,
			columns
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
};
</script>

<style lang='scss' scoped>
tr:last-child td {
  padding-bottom: 0;
}
</style>