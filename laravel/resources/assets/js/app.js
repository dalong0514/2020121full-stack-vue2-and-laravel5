// import "core-js/fn/object/assign";
import Vue from 'vue';
// window.Vue = require('vue');
import { populateAmenitiesAndPrices } from './helpers';

let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);

// images carousel
Vue.component('image-carousel', {
    template: `<div class="image-carousel">
                    <img v-bind:src="images[index]"/>>
               </div>`,
    data() {
        return {
            // images: [
            //     'images/1/Image_1.jpg',
            //     'images/1/Image_2.jpg',
            //     'images/1/Image_3.jpg',
            //     'images/1/Image_4.jpg',
            // ],
            images: Object.assign(model).images,
            index: 0,
        }
    }
});

// Vue 实例
var vm = new Vue({
    el: "#app",
    // ployfills
    data: Object.assign(model, {
        headerImageStyle: {
            "background-image": `url(${model.images[0]})`
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
