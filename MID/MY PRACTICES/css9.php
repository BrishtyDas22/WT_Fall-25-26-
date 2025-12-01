<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-section Layout - Lab Task 09</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f4f4f4;
        }

        .section-box {
            display: inline-block; /* Align boxes horizontally */
            vertical-align: top; /* Align top edges */
            padding: 15px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            margin-right: 10px; /* spacing between boxes */
            min-height: 300px; /* ensure uniform height */
        }

        /* Sidebar */
        .sidebar {
            width: 20%;
            background-color: #e0f7fa;
        }

        /* Main Content */
        .main-content {
            width: 58%; /* adjust to fit spacing */
            background-color: #fff3e0;
        }

        /* Advertisement */
        .advertisement {
            width: 20%;
            background-color: #fce4ec;
            margin-right: 0; /* last box no extra margin */
        }

        h2 {
            margin-top: 0;
        }

        p {
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="section-box sidebar">
        <h2>Categories</h2>
        <ul>
            <li>World</li>
            <li>Technology</li>
            <li>Sports</li>
            <li>Lifestyle</li>
            <li>Health</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="section-box main-content">
        <h2>Latest Articles</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat justo ut ligula cursus, a vulputate felis vehicula. Donec nec sapien sed risus gravida fermentum.</p>
        <p>Aliquam erat volutpat. Nam in tincidunt leo, non vulputate mauris. Sed ac erat vitae lectus venenatis efficitur.</p>
    </div>

    <!-- Advertisement -->
    <div class="section-box advertisement">
        <h2>Sponsored</h2>
        <p>Buy the latest tech gadgets!</p>
        <p>Special discounts on laptops, headphones, and smartwatches.</p>
    </div>

</body>
</html>
