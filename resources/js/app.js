/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import router from './router';
import store from './store';
import App from '../components/App.vue';


import {
    Form,
    message,
    Modal,
    notification,
    Icon,
    Input,
    Checkbox,
    Button,
    Layout,
    Menu,
    List,
    Switch,
    Skeleton,
	Avatar,
	Table,
	Tag,
	Divider,
	PageHeader,
	Statistic,
	Row,
	Spin,
	Card,
	Col,
	Slider,
	DatePicker,
} from 'ant-design-vue';

import RangePicker from 'ant-design-vue/es/date-picker/RangePicker';
// import 'ant-design-vue/lib/date-picker/style/css';

// const RangePicker =
// 	() => import(/* webpackChunkName: "range-picker" */ 'ant-design-vue/types/date-picker/range-picker');


Vue.use(Form);
Vue.use(Icon);
Vue.use(Input);
Vue.use(Checkbox);
Vue.use(Button);
Vue.use(Modal);
Vue.use(Layout);
Vue.use(Menu);
Vue.use(List);
Vue.use(Switch);
Vue.use(Skeleton);
Vue.use(Avatar);
Vue.use(Table);
Vue.use(Tag);
Vue.use(Divider);
Vue.use(PageHeader);
Vue.use(Statistic);
Vue.use(Row);
Vue.use(Spin);
Vue.use(Card);
Vue.use(Col);
Vue.use(Slider);
Vue.use(DatePicker);
Vue.use(RangePicker);



Vue.prototype.$message = message;
Vue.prototype.$notification = notification;
Vue.prototype.$info = Modal.info;
Vue.prototype.$success = Modal.success;
Vue.prototype.$error = Modal.error;
Vue.prototype.$warning = Modal.warning;
Vue.prototype.$confirm = Modal.confirm;
Vue.prototype.$_ = _;

Vue.config.productionTip = false;

// import 'ant-design-vue/dist/antd.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);

// console.log('files: ', files);

// files.keys().map(key => {

//     console.log('key: ', key.split('/').pop().split('.')[0]);
//     console.log('files(key): ', files(key));


//     Vue.component(key.split('/').pop().split('.')[0], files(key).default);
// });


// Vue.component('loader', require('../components/Partials/Loader.vue').default);
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
    el: '#app',
    render: h => h(App),
    router,
    store
  });
