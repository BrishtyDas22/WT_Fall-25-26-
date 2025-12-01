<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        form input {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #0077cc;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        form button:hover {
            background-color: #005fa3;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
            display: block;
        }

        .success {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form id="registrationForm" novalidate>
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
            <span class="error" id="nameError"></span>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <span class="error" id="emailError"></span>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password">
            <span class="error" id="passwordError"></span>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
            <span class="error" id="confirmPasswordError"></span>

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="Enter phone number">
            <span class="error" id="phoneError"></span>

            <button type="submit">Register</button>
            <p class="success" id="successMessage"></p>
        </form>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Clear previous messages
            document.getElementById("nameError").innerText = "";
            document.getElementById("emailError").innerText = "";
            document.getElementById("passwordError").innerText = "";
            document.getElementById("confirmPasswordError").innerText = "";
            document.getElementById("phoneError").innerText = "";
            document.getElementById("successMessage").innerText = "";

            // Get values
            const fullname = document.getElementById("fullname").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const phone = document.getElementById("phone").value.trim();

            let isValid = true;

            // Full Name validation
            if (fullname === "") {
                document.getElementById("nameError").innerText = "Full Name is required";
                isValid = false;
            }

            // Email validation
            if (email === "" || !email.includes("@") || !email.includes(".")) {
                document.getElementById("emailError").innerText = "Enter a valid email";
                isValid = false;
            }

            // Password validation
            if (password.length < 6) {
                document.getElementById("passwordError").innerText = "Password must be at least 6 characters";
                isValid = false;
            }

            // Confirm Password validation
            if (password !== confirmPassword) {
                document.getElementById("confirmPasswordError").innerText = "Passwords do not match";
                isValid = false;
            }

            // Phone validation
            const phoneRegex = /^[0-9]+$/;
            if (!phoneRegex.test(phone)) {
                document.getElementById("phoneError").innerText = "Phone number must contain only digits";
                isValid = false;
            }

            // Show success message if all valid
            if (isValid) {
                document.getElementById("successMessage").innerText = "Registration Successful!";
                // Optionally, reset form
                // document.getElementById("registrationForm").reset();
            }
        });
    </script>
</body>
</html>
