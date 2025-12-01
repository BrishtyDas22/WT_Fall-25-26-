<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Header - Lab Task 07</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            line-height: 1.6;
        }

        /* Sticky Header */
        header {
            position: sticky;
            top: 0;
            background-color: #007BFF;
            color: white;
            padding: 15px 20px;
            border-bottom: 3px solid #0056b3;
            z-index: 1000;
        }

        header h1 {
            margin: 0;
            font-size: 1.8em;
            display: inline-block;
        }

        nav {
            display: inline-block;
            margin-left: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        main {
            padding: 20px;
            margin-top: 10px; /* space below header */
        }

        main p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <header>
        <h1>TechBlog</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Articles</a>
            <a href="#">Tutorials</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        <h2>Welcome to TechBlog</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit, velit ut faucibus posuere, justo quam gravida eros, vitae fermentum purus odio vel elit.</p>
        <p>Praesent at elit nec nulla viverra feugiat. Cras sed ipsum et elit facilisis ultricies. Duis id facilisis nulla.</p>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In sed diam vel nisi sollicitudin mollis.</p>
        <p>Morbi eu velit sed elit feugiat laoreet. Sed efficitur, massa in elementum efficitur, libero quam egestas purus, in efficitur arcu neque ac sapien.</p>
        <p>Fusce sed felis in nisl hendrerit scelerisque. Maecenas imperdiet, nunc id porta pulvinar, justo felis lacinia purus, sed bibendum lorem sapien sit amet velit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit, velit ut faucibus posuere, justo quam gravida eros, vitae fermentum purus odio vel elit.</p>
        <p>Praesent at elit nec nulla viverra feugiat. Cras sed ipsum et elit facilisis ultricies. Duis id facilisis nulla.</p>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In sed diam vel nisi sollicitudin mollis.</p>
        <p>Morbi eu velit sed elit feugiat laoreet. Sed efficitur, massa in elementum efficitur, libero quam egestas purus, in efficitur arcu neque ac sapien.</p>
        <p>Fusce sed felis in nisl hendrerit scelerisque. Maecenas imperdiet, nunc id porta pulvinar, justo felis lacinia purus, sed bibendum lorem sapien sit amet velit.</p>
    </main>

</body>
</html>
