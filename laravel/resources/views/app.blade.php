<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script type="text/javascript">
        window.vuebnb_listing_model = "{!!addslashes(json_encode($model))!!}";
        console.log(JSON.parse(window.vuebnb_listing_model));
    </script>
</head>
<body>
    <div id="toolbar">
        <img src="{{ asset('images/logo.png') }}" class="icon">
        <h1>vuebnb</h1>
    </div>
    <div id="app">
        <div class="header">
            <div 
            class="header-img" 
            v-bind:style="headerImageStyle"
            v-on:click="modalOpen=true"
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
                <button class="more" v-if="contracted" v-on:click="contracted=false">
                    + More
                </button>
            </div>
            <div class="lists">
                <hr>
                <div class="amenities list">
                    <div class="title"><strong>Amentities</strong></div>
                    <div class="content">
                        <div class="list-item" v-for="amenity in amenities">
                            <i class="fa fa-lg" v-bind:class="amenity.icon"></i>
                            <span>@{{ amenity.title }}</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="prices list">
                    <div class="title"><strong>Prices</strong></div>
                    <div class="content">
                        <div class="list-item" v-for="price in prices">
                            @{{ price.title }}: <strong>@{{ price.value }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal" v-bind:class="{ show: modalOpen }">
            <button v-on:click="modalOpen=false" class="modal-close">
                &times;
            </button>
            <div class="modal-content">
                <image-carousel :images="images"><image-carousel/> 
                <!-- <img v-bind:src="images[0]"/> -->
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('js/testapp.js') }}" type="text/javascript"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    <script>
        // test JS
        let testfun = function() {
            //
            console.log("dalong");
        }
        testfun();
        console.log(testfun.prototype);
    </script>

</body>
</html>