<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #0c549dff;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
 
    button {
      background-color: #003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
  </head>
<body>
 
  <h1> Participant Registration </h1>
 
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="Email" />
 
    <label>Phone Number</label>
    <input type="number" id="phone number" />
       
        <label>password</label>
    <input type="number" id="password" />

        <label>confirm password</label>
    <input type="number" id="confirm password" />
 
   
    </select>
 
    <button type="submit">Register</button>
  </form>
 
  <!-- Output Section -->
  <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
      // Get values from form
      var name = document.getElementById("name").value.trim();
      var Email = document.getElementById("Email").value.trim();
      var phone_number = document.getElementById("phone number").value.trim();
      var password = document.getElementById("password").value;
      var confirm_password = document.getElementById("confirm password").value;
 
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
      // Clear previous messages
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
 
      // Validation
      if (name === "" || Email === "" || phone number === "" || password=== ""||confirm password=== "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (isNaN(id)) {
        errorDiv.innerHTML = " phone number must be numeric.";
        return false;
      }
        if (isNaN(id)) {
        errorDiv.innerHTML = " password must be numeric.";
        return false;
      }
        if (isNaN(id)) {
        errorDiv.innerHTML = " confirm password must be numeric.";
        return false;
      }
 
     
 
 
      outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone Number: ${phone_number}<br>
        Password: ${password}<br>
        Confirm Password:${confirm_password}
      `;
 
      return false;
    }
  </script>
 
</body>
</html>