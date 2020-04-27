<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vue-style.css') }}" type="text/css">
    <script type="text/javascript">
        window.vuebnb_server_data = "{!!addslashes(json_encode($data))!!}";
        console.log(JSON.parse(window.vuebnb_server_data));
    </script>
</head>
<body>
    <div id="app">
        <!-- <listing-page></listing-page> -->
    </div>

</body>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
</html>