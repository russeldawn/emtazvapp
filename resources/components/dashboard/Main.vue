<template>
	<div id="components-grid">

		<a-row :gutter="[16, 16]">

			<a-col :span="6">
				<a-card hoverable :loading="loading">
					<a-card-meta title="Card title" description="This is the description">
						<a-icon slot="icon" type="alert" />
					</a-card-meta>
				</a-card>
			</a-col>

			<a-col :span="6">
				<a-card hoverable :loading="loading">
					<a-card-meta title="Card title" description="This is the description">
						<a-icon slot="icon" type="book" />
					</a-card-meta>
				</a-card>
			</a-col>

			<a-col :span="6">
				<a-card hoverable :loading="loading">
					<a-card-meta title="Card title" description="This is the description">
						<a-icon slot="icon" type="calendar" />
					</a-card-meta>
				</a-card>
			</a-col>

			<a-col :span="6">
				<a-card hoverable :loading="loading">
					<a-card-meta title="Card title" description="This is the description">
						<a-icon slot="icon" type="credit-card" />
					</a-card-meta>
				</a-card>
			</a-col>

			<a-col :span="6">
				<a-card hoverable :loading="loading">
					<a-card-meta title="Card title" description="This is the description">
						<a-icon slot="icon" type="carry-out" />
						<a-avatar
							slot="avatar"
							src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png"
						/>
					</a-card-meta>
				</a-card>
			</a-col>

		</a-row>

	</div>
</template>

<script>

export default {
	mounted() {
		setTimeout(() => {
			this.handleClick();
		}, 2000);
	},
	data() {
		return {
			loading: true,
		};
	},
	methods: {
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
