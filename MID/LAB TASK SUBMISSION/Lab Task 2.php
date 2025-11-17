<!DOCTYPE html>
<html>
<head>
  <title>LAB TASK 2</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #003366;
    }
 
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    </style>
</head>
<body>
 
  <h2>Student Registration</h2>
 
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="studentId" />
 
    <label>Password:</label>
    <input type="number" id="age" />
 
    <label>confirm Password:</label>
    <input type="number" id="age" />
  
 
    <button type="submit">Register</button>
  </form>
  <form onsubmit="return handleSubmit()">
    <label>Course Name:</label>
    <input type="text" id="name1" />
 
     <button type="submit">Add Course</button>
 
    <input type="text" id="web tech" />
  </form>
 
  
</body>
</html>