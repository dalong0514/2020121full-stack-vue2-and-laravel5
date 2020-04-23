import Vue from 'vue';
// window.Vue = require('vue');

Vue.component('my-component', {
    template: '<div>{{ title }}</div>',
    props: ['title'],
});

var vm2 = new Vue({
    el: "#app2",
    data: {
        title: "hello world"
    },
});

// var vm1 = new Vue({
//     el: "#app1",
//     data: {
//         title: "hello dalong"
//     },
// });

setTimeout(() => {
    vm2.title = "goodbye world";
}, 2000);