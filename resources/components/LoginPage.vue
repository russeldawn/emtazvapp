<template>
    <div>
		<!-- <p>this is the login Page!!!</p> -->
        <a-button type="primary" @click="showConfirm">Primary</a-button>
		<a-button @click="info('tested this info modal')">Default</a-button>
		<a-button
			type="dashed"
			@click="success('Delete Map', 'Map Session deleted successfully')"
		>Dashed</a-button>
		<a-button
			type="danger"
			@click="warning('this is a random warning', 'told this is a warning!')"
		>Danger</a-button>
		<a-date-picker @change="onChange">
			<a-icon slot="suffixIcon" type="smile"/>
		</a-date-picker>
    </div>
</template>

<script>
import mixins from "../js/mixin";

export default {
	mixins: [mixins],
    methods: {
        onChange(picked) {
			console.log('picked date: ', picked);

		},
    }
}
</script>

<style>

</style>
