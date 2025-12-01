<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar - Lab Task 03</title>

    <style>
        /* Navigation bar full width */
        nav {
            background-color: #222;
            padding: 15px;
            width: 100%;
        }

        /* Unordered list reset */
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /* List items horizontal */
        nav ul li {
            display: inline-block;
            margin-right: 25px;
        }

        /* Link styling */
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            transition: 0.3s;
        }

        /* Hover effect */
        nav ul li a:hover {
            background-color: #ff9800;
            color: black;
            border-radius: 5px;
        }
    </style>

</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

</body>
</html>
