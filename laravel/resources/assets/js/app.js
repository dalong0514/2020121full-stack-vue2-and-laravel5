// import "core-js/fn/object/assign";
import Vue from 'vue';
// window.Vue = require('vue');
import { populateAmenitiesAndPrices } from './helpers';
import ImageCarousel from '../components/ImageCarousel.vue';
import ModalWindow from '../components/ModalWindow.vue';

let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);

// Vue 实例
var vm = new Vue({
    el: "#app",
    // ployfills
    data: Object.assign(model, {
        headerImageStyle: {
            "background-image": `url(${model.images[0]})`
        },
        contracted: true,
    }),
    components: { 
        ImageCarousel,
        ModalWindow,
    },
});
