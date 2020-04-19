<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="toolbar"></div>
    <div id="app">
        <div class="header">
            <div 
            class="header-img" 
            v-bind:style="headerImageStyle"
            v-on:click="modalOpen = true"
            >
                <button class="view-photos">View Photos</button>
            </div>
        </div>
        <div class="container">
            <div class="heading">
                <h1>@{{ title }}</h1>
                <p>@{{ address }}</p>
            </div>
            <hr>
            <div class="about">
                <h3>About this listing</h3>
                <p v-bind:class="{contracted: contracted}">@{{ about }}</p>
                <button class="more" v-if="contracted" v-on:click="contracted = false">
                    + More
                </button>
            </div>
            <div class="lists">
                <div v-for="amenity in amenities">@{{ amenity.title }}</div>
            </div>
        </div>
        <div id="modal" v-bind:class="{ show: modalOpen }">
            <button v-on:click="modalOpen = false" class="modal-close">
                &times;
            </button>
            <div class="modal-content">
                <img src="images/header.jpg"/>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/app.js"></script>

    <script>
        var vm1 = new Vue({
            // el: "#app1",
            data: {
                message: "Hello World",
            },
            watch: {
                message: function(newVal, oldVal) {
                    console.log(oldVal, ", ", newVal);
                },
            },
        });
        setTimeout(function() {
            vm1.message = "Goodbye world";
        }, 2000);
    </script>
</body>
</html>