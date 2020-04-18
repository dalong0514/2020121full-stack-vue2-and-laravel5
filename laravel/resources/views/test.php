<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="toolbar"></div>
    <div id="app">
        <div class="heading">
            <h1>{{ title }}</h1>
            <p>{{ address }}</p>
        </div>
        <hr>
        <div class="about">
            <h3>About this listing</h3>
            <p>{{ about }}</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="app.js"></script>
</body>
</html>