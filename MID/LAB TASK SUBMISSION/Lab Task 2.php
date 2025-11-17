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
 
    </style>
</head>
<body>
 

 
  <form onsubmit="return handleSubmit()">
      <h2>Student Registration</h2>
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
  <br>
  <br>
  
  
  <form onsubmit="return handleSubmit()">
        <h2>Course Registration</h2>
    <label>Course Name:</label>
    <input type="text" id="name1" />
 
     <button type="submit">Add Course</button>
 
    <input type="text" id="web tech" />
  </form>
 
  
</body>
</html>