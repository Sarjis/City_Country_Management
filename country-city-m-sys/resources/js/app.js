require('./bootstrap');
//window.Vue = require('vue');
import Vue from 'vue'
import store from './store/index'
import router from './router/index'
import CKEditor from '@ckeditor/ckeditor5-vue';
import shortLength from './my-files/filter/index'
Vue.use(CKEditor);


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('vue-menu', require('./components/front-end/Menu.vue').default);


const app = new Vue({
    el: '#app',
    router,
    store,
    shortLength
});
