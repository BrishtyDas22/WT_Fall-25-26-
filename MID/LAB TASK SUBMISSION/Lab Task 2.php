<!DOCTYPE html>
<html>
<head>
  <title>LAB TASK 2</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #d2dee9ff;
    }
 
    h2 {
      text-align: center;
      color: #000000ff;
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
      background-color: #2e64c8ff;
      width:120px;
      padding:8px;
      border-radius:5px;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #0055aa;
    }
 
    </style>
</head>
<body>
 

 
  <form onsubmit="return handleSubmitReg()">
      <h2>Student Registration</h2>
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="email" />
 
    <label>Password:</label>
    <input type="number" id="password" />
 
    <label>confirm Password:</label>
    <input type="number" id="confirm_password" />
  
 
    <button type="submit">Register</button>
    <div id="reg_output" style="margin-top:15px: color:green"></div>
     <div id="reg_error" style="color:red;"></div>
  </form>
  </form>
  <br>
  <br>
  
  
  <form onsubmit="return handleSubmit()">
        <h2>Course Registration</h2>
    <label>Course Name:</label>
    <input type="text" id="course_name" />
 
     <button type="submit">Add Course</button>
 
    <input type="text" id="web tech" />
  </form>
 
  <script>
    function handleSubmit() {
      // Get values from form
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("password").value.trim();
      var confirm_password = document.getElementById("confirm_password").value.trim();
       var course_name = document.getElementById("course_name").value.trim();

      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
      // Clear previous messages
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
      // Validation
      if (name === "" || email === "" || password === "" || confirm_password=== ""|| course_name=== "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (isNaN(password)) {
        errorDiv.innerHTML = " password must be numeric.";
        return false;
      }
  if (isNaN(confirm_password)) {
        errorDiv.innerHTML = " confirm_password must be numeric.";
        return false;
      }
     
 
 
      outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${name}<br>
        
        Department: ${email}
      `;
 
      return false;
    }
   
 </script>
</body>
</html>