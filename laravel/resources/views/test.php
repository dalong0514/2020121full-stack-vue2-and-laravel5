<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="node_modules/open-sans-all/css/open-sans.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>
    <div id="toolbar"></div>
    <div id="app">
        <div class="header">
            <!-- <img src="image/header.jpg" alt=""> -->
            <div class="header-img" v-bind:style="headerImageStyle"></div>
        </div>
        <div class="container">
            <div class="heading">
                <h1>{{ title }}</h1>
                <p>{{ address }}</p>
            </div>
            <hr>
            <div class="about">
                <h3>About this listing</h3>
                <p>{{ about }}</p>
            </div>
            <div class="lists">
                <div v-for="amenity in amenities">{{ amenity.title }}</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="data.js"></script>
    <script src="js/vueapp.js"></script>
</body>
</html>