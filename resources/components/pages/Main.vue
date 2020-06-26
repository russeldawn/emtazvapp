<template>
	<div id="components-grid">

		<a-row :gutter="[16, 16]">

			<a-col :span="8">
				<a-card hoverable :loading="loading">

					<span class="dashboard-icon">
						<a-icon slot="icon" type="alert" />
					</span>

					<a-card-meta>
						<template slot="title">
							<span>
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
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
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
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
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
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
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
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
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
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
								Card title
							</span>
						</template>

						<template slot="description">
							<span>
								This is the description.
							</span>
						</template>
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
