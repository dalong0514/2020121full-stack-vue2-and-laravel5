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
        @{{ comtest }}
        <br>
        <input type="radio" v-model="pick" :value="a">
    </div>

    <div id="app1">
        <input v-model="message" placeholder="edit me">
        <p>message is: @{{ message }}</p>
        <span>multline message is:</span>
        <br>
        <textarea v-model="message" placeholder="edit me"></textarea>
        <p style="white-space: pre-line;">@{{ message }}</p>
    </div>
</body>

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
            pick: "",
            a: "dalong",
        },
        computed: {
            comtest: function() {
                return this.toggle ? 'On' : 'Off';
            },
        },
    });

    Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>@{{ todo.text }}</li>',
    });

    var vm1 = new Vue({
        el: "#app1",
        data: {
            grocerylist: [
                {id:0, text:'蔬菜'},
                {id:1, text:'蔬菜1'},
                {id:2, text:'蔬菜2'},
                {id:3, text:'蔬菜3'},
            ],
            message: "",
        },
    });
</script>
</html>