// import "core-js/fn/object/assign";
// window.Vue = require('vue');
import Vue from 'vue';
import ListingPage from '../components/ListingPage.vue';
import App from '../components/App.vue';
import router from './router';
import store from './store';

// Vue 实例
var vm = new Vue({
    el: "#app",
    render: h => h(App),
    // components: {ListingPage},
    router,
    store,
});
