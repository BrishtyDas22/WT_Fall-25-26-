<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Contact Widget - Lab Task 05</title>

    <style>
        body {
            height: 2000px; /* for scroll demonstration */
            font-family: Arial, sans-serif;
        }

        .contact-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007BFF;
            color: white;
            padding: 15px;
            width: 170px;
            border-radius: 10px;
            border: 2px solid #0056b3;
            z-index: 9999;
            text-align: center;
            transition: 0.3s;
        }

        .contact-widget:hover {
            background: #0056b3;
        }

        .contact-widget a {
            color: yellow;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Scroll Down to Test Contact Widget</h1>
    <p>This is sample page content for testing the fixed widget.</p>

    <!-- Fixed Contact Box -->
    <div class="contact-widget">
        <strong>Contact Us</strong>
        <p> 01234-567890</p>
        <p><a href="mailto:support@example.com">Email Us</a></p>
    </div>

</body>
</html>
