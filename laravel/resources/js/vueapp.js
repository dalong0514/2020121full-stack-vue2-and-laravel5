// Vue 实例
var vm = new Vue({
    el: "#app",
    data: {
        title: sample.title,
        address: sample.address,
        about: sample.about,
        headerImageStyle: {
            "background-image": "url('image/header.jpg')"
        },
        amenities: sample.amenities,
        prices: sample.prices,
        contracted: true,
        modalOpen: false,
    },
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
