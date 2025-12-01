<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Box - Lab Task 04</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .product-box {
            display: inline-block;
            width: 250px;
            background: white;
            border: 2px solid #ddd;
            padding: 15px;
            margin: 15px;
            text-align: center;
            border-radius: 8px;
            transition: 0.3s;
        }

        .product-box:hover {
            outline: 3px solid #4CAF50;
            outline-offset: 4px;
        }

        .product-box img {
            width: 120px;
            height: auto;
        }

        .product-box h3 {
            margin-top: 10px;
        }

        .product-box a {
            text-decoration: none;
            color: white;
            background: #4CAF50;
            padding: 8px 12px;
            display: inline-block;
            border-radius: 5px;
            margin-top: 8px;
        }

        .product-box a:hover {
            background: #388E3C;
        }

    </style>
</head>
<body>

    <!-- Product 1 -->
    <div class="product-box">
        <img src="https://i.imgur.com/8hZQZ0P.png" alt="Laptop">
        <h3>Laptop Pro X</h3>
        <p>Powerful performance, 16GB RAM, 512GB SSD.</p>
        <p><b>Price: $899</b></p>
        <a href="#">Buy Now</a>
    </div>

    <!-- Product 2 -->
    <div class="product-box">
        <img src="https://i.imgur.com/rb8dM3d.png" alt="Headphones">
        <h3>Wireless Headphones</h3>
        <p>Noise canceling, Bluetooth 5.0, long battery life.</p>
        <p><b>Price: $149</b></p>
        <a href="#">Buy Now</a>
    </div>

    <!-- Product 3 -->
    <div class="product-box">
        <img src="https://i.imgur.com/sR0q3bL.png" alt="Smartwatch">
        <h3>Smartwatch S2</h3>
        <p>Fitness tracking, AMOLED display, waterproof.</p>
        <p><b>Price: $199</b></p>
        <a href="#">Buy Now</a>
    </div>

</body>
</html>
