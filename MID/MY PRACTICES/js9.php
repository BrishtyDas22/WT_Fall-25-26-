<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Portfolio</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        header {
            background-color: #0077cc;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        nav a:hover {
            text-decoration: underline;
        }

        #themeBtn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            background-color: white;
            color: #0077cc;
            margin-left: 20px;
        }

        main {
            padding: 30px;
            min-height: 400px;
        }

        section {
            display: none;
        }

        section.active {
            display: block;
        }

        #greeting {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        form button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #0077cc;
            color: white;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        /* Dark mode styles */
        body.dark-mode {
            background-color: #121212;
            color: #f5f5f5;
        }

        body.dark-mode header {
            background-color: #1f1f1f;
            color: #f5f5f5;
        }

        body.dark-mode nav a {
            color: #f5f5f5;
        }

        body.dark-mode #themeBtn {
            background-color: #f5f5f5;
            color: #121212;
        }

        body.dark-mode form input, 
        body.dark-mode form textarea {
            background-color: #1f1f1f;
            color: #f5f5f5;
            border: 1px solid #555;
        }
    </style>
</head>
<body class="light-mode">

<header>
    <h1>My Portfolio</h1>
    <nav>
        <a data-section="about">About</a>
        <a data-section="projects">Projects</a>
        <a data-section="contact">Contact</a>
        <button id="themeBtn">Switch to Dark Mode</button>
    </nav>
</header>

<main>
    <div id="greeting"></div>

    <section id="about" class="active">
        <h2>About Me</h2>
        <p>Hello! I'm a passionate web developer. I love building interactive websites and learning new technologies.</p>
    </section>

    <section id="projects">
        <h2>My Projects</h2>
        <ul>
            <li>Portfolio Website</li>
            <li>Student Management System</li>
            <li>Interactive Web Applications</li>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contactForm" novalidate>
            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="Enter your name">
            <span class="error" id="nameError"></span>

            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter your email">
            <span class="error" id="emailError"></span>

            <label for="message">Message:</label>
            <textarea id="message" rows="5" placeholder="Enter your message"></textarea>
            <span class="error" id="messageError"></span>

            <button type="submit">Send</button>
            <p id="successMsg" style="color:green; font-weight:bold; margin-top:10px;"></p>
        </form>
    </section>
</main>

<script>
    // Dark/Light Mode
    const themeBtn = document.getElementById("themeBtn");
    themeBtn.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");
        if (document.body.classList.contains("dark-mode")) {
            themeBtn.textContent = "Switch to Light Mode";
        } else {
            themeBtn.textContent = "Switch to Dark Mode";
        }
    });

    // Time-Based Greeting
    const greetingDiv = document.getElementById("greeting");
    function updateGreeting() {
        const now = new Date();
        const hour = now.getHours();
        let greetingText = "Hello!";
        if (hour < 12) {
            greetingText = "Good Morning!";
        } else if (hour < 18) {
            greetingText = "Good Afternoon!";
        } else {
            greetingText = "Good Evening!";
        }
        greetingDiv.textContent = greetingText;
    }
    updateGreeting();
    setInterval(updateGreeting, 60000); // update every minute

    // Section Toggling
    const navLinks = document.querySelectorAll("nav a");
    const sections = document.querySelectorAll("main section");
    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            const target = this.dataset.section;
            sections.forEach(sec => {
                if (sec.id === target) {
                    sec.classList.add("active");
                } else {
                    sec.classList.remove("active");
                }
            });
        });
    });

    // Contact Form Validation
    const contactForm = document.getElementById("contactForm");
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const messageInput = document.getElementById("message");
    const nameError = document.getElementById("nameError");
    const emailError = document.getElementById("emailError");
    const messageError = document.getElementById("messageError");
    const successMsg = document.getElementById("successMsg");

    contactForm.addEventListener("submit", function(e) {
        e.preventDefault();
        let valid = true;

        // Name validation
        if (nameInput.value.trim() === "") {
            nameError.textContent = "Name is required";
            valid = false;
        } else {
            nameError.textContent = "";
        }

        // Email validation
        if (!emailInput.value.includes("@") || !emailInput.value.includes(".")) {
            emailError.textContent = "Enter a valid email";
            valid = false;
        } else {
            emailError.textContent = "";
        }

        // Message validation
        if (messageInput.value.trim().length < 10) {
            messageError.textContent = "Message must be at least 10 characters";
            valid = false;
        } else {
            messageError.textContent = "";
        }

        // Show success message if valid
        if (valid) {
            successMsg.textContent = "Message sent successfully!";
            contactForm.reset();
        } else {
            successMsg.textContent = "";
        }
    });
</script>

</body>
</html>
