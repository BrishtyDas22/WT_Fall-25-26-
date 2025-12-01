<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overflow Handling Box - Lab Task 08</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            margin-top: 40px;
        }

        .box {
            width: 300px;
            height: 200px;
            border: 2px solid #333;
            padding: 10px;
            margin-bottom: 30px;
        }

        /* Overflow: visible (default)
           Content that exceeds box will spill outside */
        .overflow-visible {
            overflow: visible;
            background-color: #f9f9f9;
        }

        /* Overflow: hidden
           Content that exceeds box is clipped and hidden */
        .overflow-hidden {
            overflow: hidden;
            background-color: #e6f7ff;
        }

        /* Overflow: scroll
           Always shows scrollbars to scroll content */
        .overflow-scroll {
            overflow: scroll;
            background-color: #fff0f5;
        }

        /* Overflow: auto
           Scrollbars appear only if content overflows */
        .overflow-auto {
            overflow: auto;
            background-color: #fffbe6;
        }
    </style>
</head>
<body>

    <h1>Overflow Handling Boxes</h1>

    <h2>Overflow: visible</h2>
    <div class="box overflow-visible">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus justo a nunc tincidunt, in tincidunt turpis elementum. Donec pharetra leo et sapien mollis, vel euismod nunc suscipit. Sed dictum, metus a efficitur consequat, urna arcu pharetra ligula, nec fringilla nibh nulla ac eros.
    </div>

    <h2>Overflow: hidden</h2>
    <div class="box overflow-hidden">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus justo a nunc tincidunt, in tincidunt turpis elementum. Donec pharetra leo et sapien mollis, vel euismod nunc suscipit. Sed dictum, metus a efficitur consequat, urna arcu pharetra ligula, nec fringilla nibh nulla ac eros.
    </div>

    <h2>Overflow: scroll</h2>
    <div class="box overflow-scroll">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus justo a nunc tincidunt, in tincidunt turpis elementum. Donec pharetra leo et sapien mollis, vel euismod nunc suscipit. Sed dictum, metus a efficitur consequat, urna arcu pharetra ligula, nec fringilla nibh nulla ac eros.
    </div>

    <h2>Overflow: auto</h2>
    <div class="box overflow-auto">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus justo a nunc tincidunt, in tincidunt turpis elementum. Donec pharetra leo et sapien mollis, vel euismod nunc suscipit. Sed dictum, metus a efficitur consequat, urna arcu pharetra ligula, nec fringilla nibh nulla ac eros.
    </div>

</body>
</html>
