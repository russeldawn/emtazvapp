<template>
	<div>
		<div class="condition-list">

			<h5 :style="{ marginBottom: '16px' }">
				Condition
			</h5>

			<a-list item-layout="vertical" :data-source="data" :item-size="73">

				<div slot="header">
					<a-checkbox :indeterminate="indeterminate" :checked="checkAll" @change="onCheckAllChange">
						Check all
					</a-checkbox>
				</div>

				<a-list-item slot="renderItem" slot-scope="item, index">

					<a-list-item-meta style="display: flex; float: left;">
						<a-checkbox slot="avatar" :default-checked="false" @change="onChange"/>
					</a-list-item-meta>

					<span>
						{{ item }} {{ index }}
					</span>

				</a-list-item>

			</a-list>

			<div class="condition-list-action-buttons">

				<a-button type="primary">
					Add
				</a-button>

				<a-button type="danger">
					Remove
				</a-button>

			</div>

		</div>


		<div class="condition-list">

			<h5 :style="{ marginBottom: '16px' }">
				Additional Condition
			</h5>

			<a-list item-layout="vertical" :data-source="dataList" :item-size="73">

				<div slot="header">
					<a-checkbox :indeterminate="indeterminate" :checked="checkAll" @change="onCheckAllChange">
						Check all
					</a-checkbox>
				</div>

				<a-list-item slot="renderItem" slot-scope="item, index">

					<a-list-item-meta style="display: flex; float: left;">
						<a-checkbox slot="avatar" :default-checked="false" @change="onChange"/>
					</a-list-item-meta>

					<span>
						{{ item }} {{ index }}
					</span>

				</a-list-item>

			</a-list>

			<div class="condition-list-action-buttons">

				<a-button type="primary">
					Add
				</a-button>

				<a-button type="danger">
					Remove
				</a-button>

			</div>

		</div>

	</div>
</template>

<script>
	const data = [
		'Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.',
		'Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.',
		'Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.',
	];

	const dataList = [
		'Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.',
		'Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.',
		'Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.',
		'Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.Racing car sprays burning fuel into crowd.',
		'Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.Japanese princess to wed commoner.',
		'Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.Australian walks 100km after outback crash.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.Man charged over missing wedding girl.',
		'Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.Los Angeles battles huge wildfires.',
	];

	export default {
		data() {
			return {
				data,
				dataList,
				indeterminate: true,
				checkAll: false,
			};
		},
		methods: {
			onChange(checkedList) {
				console.log('checkedList: ', checkedList);
				console.log('this.data: ', this.data);


				// this.indeterminate = !!checkedList.length && checkedList.length < plainOptions.length;
				// this.checkAll = checkedList.length === plainOptions.length;
			},
			onCheckAllChange(e) {
				console.log('e: ', e);

				Object.assign(this, {
					checkedList: e.target.checked ? data : [],
					indeterminate: false,
					checkAll: e.target.checked,
				});
			},
		}
	};

</script>

<style lang="scss" scoped>
.add-zoning-conditions {
	.condition-list {
		.ant-list{

			border: 1px solid #e8e8e8;
			border-radius: 4px;
			overflow: auto;
			padding: 8px 24px;
			height: 300px;

			.ant-list-item-meta {
				display: flex;
				float: left;

			}
		}

		.condition-list-action-buttons {
			padding: 25px;
			text-align: right;
		}
	}

}
</style>
