
<template>
  <div>
    <a-spin size="large" :tip="tip" :spinning="spinning" :delay="delayTime">
      <div class="spin-content">
        THIS IS CURRENTLY LOADING
      </div>
    </a-spin>
    Loading state：<a-switch v-model="spinning"></a-switch>
  </div>
</template>

<script>
  export default {
    data () {
      return {
		tip: 'Loading...',
        spinning: true,
        delayTime: 500,
      }
    },
    methods: {
      changeSpinning(){
        this.spinning = !this.spinning
      }
    },
  }
</script>

<style scoped>
  .spin-content{
    border: 1px solid #91d5ff;
    background-color: #e6f7ff;
    padding: 30px;
  }
</style>
