<template>
    <div>
        <custom-header class="top-header"></custom-header>
        <home-page></home-page>
    </div>
</template>

<script>
import mixin from "../../js/mixin";
import CustomHeader from "./CustomHeader";
import HomePage from "./HomePage";
export default {
    mixins: [mixin],
    components: {
        HomePage,
        CustomHeader
    }

}
</script>

<style>
.top-header {
    background-color: black;
}
</style>
