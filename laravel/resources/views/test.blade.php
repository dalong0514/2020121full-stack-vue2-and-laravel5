<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <my-component :title="title"></my-component>
    </div>
    <div id="app1">
        <div>@{{ title }}</div>
    </div>
    <!-- <script src="{{ asset('js/testapp.js') }}" type="text/javascript"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        Vue.component('my-component', {
            template: '<div>@{{ title }}</div>',
            props: ['title'],
        });

        var vm = new Vue({
            el: "#app",
            data: {
                title: "hello world"
            },
        });

        var vm1 = new Vue({
            el: "#app1",
            data: {
                title: "hello dalong"
            },
        });

        setTimeout(() => {
            vm.title = "goodbye world";
        }, 2000);
    </script>
</body>
</html>