<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile Page</title>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f7fa;
            padding: 20px;
        }

        /* Header */
        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2em;
            color: #333;
        }

        /* Profile Section */
        .profile-box {
            width: 50%;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border: 2px solid #cbd5e0;
            border-radius: 10px;
            text-align: center;
        }

        /* Profile Image */
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 15px; /* Rounded corners */
            margin-bottom: 15px;
        }

        .student-name {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .student-info {
            font-size: 1.1em;
            margin-bottom: 8px;
        }

        .bio {
            margin-top: 15px;
            font-size: 1em;
            line-height: 1.5em;
            color: #555;
        }

        /* Footer */
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #666;
        }
    </style>

</head>
<body>

    <!-- Header -->
    <header>
        <h1>Student Profile Page</h1>
    </header>

    <!-- Profile Section -->
    <section class="profile-box">
        <img src="your-photo.jpg" alt="Student Photo" class="profile-img">

        <h2 class="student-name">Brishty Das</h2>
        <p class="student-info"><strong>Department:</strong> Computer Science & Engineering</p>
        <p class="student-info"><strong>Student ID:</strong> 22-12345-1</p>

        <p class="bio">
            I am a dedicated student passionate about web development,
            programming and creative problem-solving. I enjoy learning new
            technologies and building exciting projects.
        </p>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 AIUB – Department of Computer Science</p>
    </footer>

</body>
</html>
