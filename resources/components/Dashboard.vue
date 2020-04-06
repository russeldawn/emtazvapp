<template>
  <a-layout id="dashboard-layout">
    <a-layout-sider
      :trigger="null"
      collapsible
      v-model="collapsed"
    >
      <div class="logo">
          <span>ZVAP</span>
      </div>

      <a-menu theme="dark" mode="inline" :defaultSelectedKeys="['1']">

        <a-menu-item key="1">
          <a-icon type="user" />
          <span>
              <router-link :to="{name:'main'}">User</router-link>
          </span>
        </a-menu-item>

        <a-menu-item key="2">
          <a-icon type="environment" />
          <span>
              <router-link :to="{name:'home'}">Zoning</router-link>
          </span>
        </a-menu-item>

        <a-menu-item key="3">
          <a-icon type="compass" />
          <span>
              <router-link :to="{name:'header'}">Land Use</router-link>
          </span>
        </a-menu-item>

        <a-menu-item key="4">
          <a-icon type="bank" />
          <span>
              <router-link :to="{name:'sidemenu'}">Business</router-link>
          </span>
        </a-menu-item>

        <a-menu-item key="5">
          <a-icon type="dollar" />
          <span>
              <router-link :to="{name:'sidemenu'}">Payment</router-link>
          </span>
        </a-menu-item>

        <!-- <a-menu-item key="6">
          <a-icon type="upload" />
          <span>
              <router-link :to="{name:'signup'}">Signup</router-link>
          </span>
        </a-menu-item>

        <a-menu-item key="7">
          <a-icon type="upload" />
          <span>
              <router-link :to="{name:'sidebar'}">Sidebar</router-link>
          </span>
        </a-menu-item> -->

      </a-menu>
    </a-layout-sider>

    <a-layout>
      <a-layout-header style="background: #fff; padding: 0">
        <a-icon
          class="trigger"
          :type="collapsed ? 'menu-unfold' : 'menu-fold'"
          @click="()=> collapsed = !collapsed"
        />
      </a-layout-header>

      <a-layout-content :style="{ margin: '24px 16px', padding: '24px', background: '#fff', minHeight: '280px' }">
        Content
        <router-view></router-view>
      </a-layout-content>
    </a-layout>

  </a-layout>
</template>

<script>
export default {
  data(){
    return {
      collapsed: false,
    }
  },
}
</script>

<style>

.ant-menu-item .anticon {
  font-size: 25px;
}

#dashboard-layout {
  height: 100%;
}

#dashboard-layout .trigger {
  font-size: 18px;
  line-height: 64px;
  padding: 0 24px;
  cursor: pointer;
  transition: color .3s;
}

#dashboard-layout .trigger:hover {
  color: #1890ff;
}

#dashboard-layout .logo {
  height: 32px;
  background: rgba(255,255,255,.2);
  margin: 16px;
}
</style>