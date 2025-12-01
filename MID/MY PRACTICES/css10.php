<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layered Elements - Lab Task 10</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            position: relative; /* for absolute boxes */
            height: 400px;
            background-color: #f0f0f0;
        }

        .box {
            position: absolute;
            width: 150px;
            height: 150px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 1.2em;
        }

        /* Box 1 - Red */
        .box1 {
            background-color: red;
            top: 50px;
            left: 50px;
            z-index: 1; /* bottom layer */
        }

        /* Box 2 - Blue */
        .box2 {
            background-color: blue;
            top: 100px;
            left: 100px;
            z-index: 2; /* middle layer */
        }

        /* Box 3 - Green */
        .box3 {
            background-color: green;
            top: 150px;
            left: 150px;
            z-index: 3; /* top layer */
        }
    </style>
</head>
<body>

    <div class="box box1">Box 1</div>
    <div class="box box2">Box 2</div>
    <div class="box box3">Box 3</div>

</body>
</html>
