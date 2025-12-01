<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark/Light Mode Toggle</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        header, footer {
            padding: 20px;
            text-align: center;
            background-color: #f0f0f0;
            transition: background-color 0.3s;
        }

        main {
            padding: 50px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Dark Mode Styles (default off) */
        .dark-mode {
            background-color: #121212;
            color: #f5f5f5;
        }

        .dark-mode header, .dark-mode footer {
            background-color: #1f1f1f;
        }

        .dark-mode button {
            background-color: #f5f5f5;
            color: #121212;
        }

        .light-mode button {
            background-color: #121212;
            color: #f5f5f5;
        }
    </style>
</head>
<body class="light-mode">
    <header>
        <h1>My Portfolio</h1>
    </header>

    <main>
        <h2>Welcome to my Portfolio</h2>
        <p>Click the button below to switch between Dark and Light Mode.</p>
        <button id="toggleBtn">Switch to Dark Mode</button>
    </main>

    <footer>
        &copy; 2025 My Portfolio
    </footer>

    <script>
        const body = document.body;
        const toggleBtn = document.getElementById("toggleBtn");

        let isDark = false; // default mode

        toggleBtn.addEventListener("click", function() {
            isDark = !isDark; // toggle mode

            if (isDark) {
                body.classList.add("dark-mode");
                body.classList.remove("light-mode");
                toggleBtn.textContent = "Switch to Light Mode";
            } else {
                body.classList.add("light-mode");
                body.classList.remove("dark-mode");
                toggleBtn.textContent = "Switch to Dark Mode";
            }
        });
    </script>
</body>
</html>
