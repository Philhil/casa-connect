require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Vue from 'vue'
import $ from 'jquery'
global.jQuery = require('jquery');
window.$ = $;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('offer-list', require('./components/offers/index.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);

Vue.use(require('vue-resource'));

const app = new Vue({
    el: '#app'
});