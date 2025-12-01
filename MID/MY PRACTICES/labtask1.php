<!DOCTYPE html>
<html >
<head>
   
    <title>Brishty Das - Personal Portfolio</title>

    <!-- Metadata -->
    <meta name="author" content="Brishty Das">
    <meta name="description" content="Personal portfolio webpage of Brishty Das, a Computer Science student.">
    <meta name="keywords" content="Brishty, Portfolio, Computer Science, Student, Webpage">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #aebccaff;
        }
        header {
            background-color: #735555ff;
            padding: 15px;
            color: white;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
            font-weight: bold;
        }
        section {
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 2px solid #c83a3aff;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        form {
            background: white;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
        }
        footer {
            background-color: #902727ff;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <!-- Header Section -->
    <header>
        <h1>Brishty Das</h1>
        <nav>
            <a href="#bio">About Me</a> <!--# = “scroll to element with this id on THIS page” -->
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main>

        <!-- Biography Section -->
        <section id="bio">
            <h2>About Me</h2>
            <p>Hello! I am <b>Brishty Das</b>, a Computer Science student preparing for an internship.  
                I love coding, web development, and learning new technologies.  
                This is my simple personal portfolio webpage created for my lab task.</p>
        </section>

        <!-- Education Table -->
        <section id="education">   <!--Anchor scroll / CSS / JS er jonno unique identify  -->
            <h2>Educational Qualifications</h2>

            <table>
                <tr>
                    <th>Degree</th>
                    <th>Institution</th>
                    <th>Year</th>
                </tr>
                <tr>
                    <td>SSC</td>
                    <td>Your School Name</td>
                    <td>Year</td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td>Your College Name</td>
                    <td>Year</td>
                </tr>
                <tr>
                    <td>BSc in CSE</td>
                    <td>Your University Name</td>
                    <td>Running</td>
                </tr>
            </table>
        </section>

        <!-- Contact Form -->
        <section id="contact">
            <h2>Contact Me</h2>

            <form>
                <label>Your Name:</label><br>
                <input type="text" name="name" required><br><br>

                <label>Email:</label><br>
                <input type="email" name="email" required><br><br>

                <label>Message:</label><br>
                <textarea name="message" rows="5" required></textarea><br><br>

                <button type="submit">Send Message</button>
            </form>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Brishty Das. All rights reserved.</p>
    </footer>

</body>
</html>