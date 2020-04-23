<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <my-component @toggle="toggle=!toggle"></my-component>
        @{{ message }}
    </div>
    <!-- <script src="{{ asset('js/testapp.js') }}" type="text/javascript"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        Vue.component('my-component', {
            template: '<div v-on:click="clicked">click me</div>',
            methods: {
                clicked: function() {
                    this.$emit('toggle');
                },
            },
        });

        var vm = new Vue({
            el: "#app",
            data: {
                toggle: false,
            },
            computed: {
                message: function() {
                    return this.toggle ? 'On' : 'Off';
                },
            },
        });
    </script>
</body>
</html>