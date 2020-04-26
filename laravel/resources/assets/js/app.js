// import "core-js/fn/object/assign";
// window.Vue = require('vue');
import Vue from 'vue';
import ListingPage from '../components/ListingPage.vue';

// Vue 实例
var vm = new Vue({
    el: "#app",
    render: h => h(ListingPage),
    // components: {ListingPage},
});
