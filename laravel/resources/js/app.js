// import Vue from 'vue';
window.Vue = require('vue');

let model = JSON.parse(window.vuebnb_listing_model);
// Vue 实例
var vm = new Vue({
    el: "#app",
    // ployfills
    data: Object.assign(model, {
        headerImageStyle: {
            "background-image": "url('images/header.jpg')"
        },
        contracted: true,
        modalOpen: false,
    }),
    methods: {
        escapeKeyListenser: function(evt) {
            if (evt.keyCode === 27 && this.modalOpen) {
                vm.modalOpen = false;
            }
        }
    },
    watch: {
        modalOpen: function() {
            var className = "modal-open";
            if (this.modalOpen) {
                document.body.classList.add(className);
            } else {
                document.body.classList.remove(className);
            }
        },
    },
    created: function() {
        document.addEventListener('keyup', this.escapeKeyListenser);
    },
    destoryed: function() {
        document.removeEventListener('keyup', this.escapeKeyListenser);
    },
});

document.addEventListener('keyup', function(evt) {
    if (evt.keyCode === 27 && vm.modalOpen) {
        vm.modalOpen = false;
    }
});
