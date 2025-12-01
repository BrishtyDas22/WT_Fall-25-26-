<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <!-- Internal CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .section-box {
            width: 80%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        #about {
            background-color: #ffe4e6; /* Light Pink */
        }

        #education {
            background-color: #e0f7ff; /* Light Sky Blue */
        }

        #hobbies {
            background-color: #e4ffea; /* Light Green */
        }

        h2 {
            margin-bottom: 10px;
        }

        /* Custom HR */
        hr {
            border: none;
            height: 5px;
            background-color: #888;
            width: 60%;
            margin: 20px auto;
            border-radius: 5px;
        }
    </style>

</head>
<body>

    <!-- About Me Section -->
    <div id="about" class="section-box">
        <h2>About Me</h2>
        <p>Hello! I'm Brishty Das. I’m a passionate learner and love working with web technologies.
           I enjoy exploring new ideas and growing my skills.</p>

        <!-- Required: Inline Style -->
        <p style="color: blue; font-weight: bold;">
            This line uses inline CSS as required in the task.
        </p>
    </div>

    <hr>

    <!-- Education Section -->
    <div id="education" class="section-box">
        <h2>Education</h2>
        <p>I am currently studying Computer Science at AIUB. My academic journey has helped me
           understand programming, problem-solving, and real-world applications.</p>
    </div>

    <hr>

    <!-- Hobbies Section -->
    <div id="hobbies" class="section-box">
        <h2>Hobbies</h2>
        <p>I enjoy reading, drawing, coding, listening to music, and learning new skills.
           Creativity helps me stay motivated.</p>
    </div>

</body>
</html>
