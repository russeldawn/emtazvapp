<template>
    <div>
		<router-view></router-view>
    </div>
</template>

<script>

export default {
	data() {
		return {
			csrf_token: window.csrf_token
		}
	},
}
</script>

<style scoped>

</style>
