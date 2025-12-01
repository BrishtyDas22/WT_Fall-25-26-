<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card - Lab Task 06</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-card {
            position: relative; /* For badge positioning */
            width: 300px;
            background: #ffffff;
            border: 2px solid #ccc;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Profile Photo */
        .user-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .user-card h3 {
            margin-bottom: 10px;
        }

        .user-card p {
            font-size: 0.95em;
            color: #555;
        }

        /* Badge */
        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #28a745;
            color: white;
            padding: 5px 10px;
            font-size: 0.8em;
            border-radius: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="user-card">
        <!-- Badge -->
        <div class="badge">Online</div>

        <!-- Profile Info -->
        <img src="https://i.imgur.com/4AiXzf8.jpeg" alt="Profile Photo">
        <h3>Brishty Das</h3>
        <p>Web developer enthusiast. Loves creating clean and functional UI, learning new web technologies, and building projects.</p>
    </div>

</body>
</html>
