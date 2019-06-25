/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import 'core-js/fn/object/assign';
import Vue from 'vue';
import router from "./router";
import App from "../components/App";
import store from "./store";


// import Antd from 'ant-design-vue';
// Vue.use(Antd);

import {
    Affix,
    Anchor,
    AutoComplete,
    Alert,
    Avatar,
    BackTop,
    Badge,
    Breadcrumb,
    Button,
    Calendar,
    Card,
    Collapse,
    Carousel,
    Cascader,
    Checkbox,
    Col,
    DatePicker,
    Divider,
    Dropdown,
    Form,
    Icon,
    Input,
    InputNumber,
    Layout,
    List,
    LocaleProvider,
    message,
    Menu,
    Modal,
    notification,
    Pagination,
    Popconfirm,
    Popover,
    Progress,
    Radio,
    Rate,
    Row,
    Select,
    Slider,
    Spin,
    Steps,
    Switch,
    Table,
    Transfer,
    Tree,
    TreeSelect,
    Tabs,
    Tag,
    TimePicker,
    Timeline,
    Tooltip,
    // Mention,
    Upload,
    // version,
    Drawer,
    Skeleton,
    Comment,
    ConfigProvider,
  } from 'ant-design-vue';

  Vue.prototype.$message = message;
  Vue.prototype.$notification = notification;
  Vue.prototype.$info = Modal.info;
  Vue.prototype.$success = Modal.success;
  Vue.prototype.$error = Modal.error;
  Vue.prototype.$warning = Modal.warning;
  Vue.prototype.$confirm = Modal.confirm;

  /* v1.1.3+ registration methods */
  Vue.use(Affix);
  Vue.use(Anchor);
  Vue.use(AutoComplete);
  Vue.use(Alert);
  Vue.use(Avatar);
  Vue.use(BackTop);
  Vue.use(Badge);
  Vue.use(Breadcrumb);
  Vue.use(Button);
  Vue.use(Calendar);
  Vue.use(Card);
  Vue.use(Collapse);
  Vue.use(Carousel);
  Vue.use(Cascader);
  Vue.use(Checkbox);
  Vue.use(Col);
  Vue.use(DatePicker);
  Vue.use(Divider);
  Vue.use(Drawer);
  Vue.use(Dropdown);
  Vue.use(Form);
  Vue.use(Icon);
  Vue.use(Input);
  Vue.use(InputNumber);
  Vue.use(Layout);
  Vue.use(List);
  Vue.use(LocaleProvider);
  Vue.use(Menu);
  Vue.use(Modal);
  Vue.use(Pagination);
  Vue.use(Popconfirm);
  Vue.use(Popover);
  Vue.use(Progress);
  Vue.use(Radio);
  Vue.use(Rate);
  Vue.use(Row);
  Vue.use(Select);
  Vue.use(Slider);
  Vue.use(Spin);
  Vue.use(Steps);
  Vue.use(Switch);
  Vue.use(Table);
  Vue.use(Transfer);
  Vue.use(Tree);
  Vue.use(TreeSelect);
  Vue.use(Tabs);
  Vue.use(Tag);
  Vue.use(TimePicker);
  Vue.use(Timeline);
  Vue.use(Tooltip);
  Vue.use(Upload);
  Vue.use(Skeleton);
  Vue.use(Comment);
  Vue.use(ConfigProvider);


import 'ant-design-vue/dist/antd.css';

Vue.config.productionTip = false;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let app = new Vue({
    el: '#app',
    render: h => h(App),
    router,
    store
});
