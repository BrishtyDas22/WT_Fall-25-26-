<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f2f5;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 350px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label, select, input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            padding: 8px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Smart Registration Form</h2>

<form>
    <label for="userType">Select User Type:</label>
    <select id="userType">
        <option value="">--Select--</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
    </select>

    <div id="rollDiv" style="display:none;">
        <label for="rollNumber">Roll Number:</label>
        <input type="text" id="rollNumber" placeholder="Enter Roll Number">
    </div>

    <div id="deptDiv" style="display:none;">
        <label for="department">Department:</label>
        <input type="text" id="department" placeholder="Enter Department">
    </div>
</form>

<script>
    const userType = document.getElementById("userType");
    const rollDiv = document.getElementById("rollDiv");
    const deptDiv = document.getElementById("deptDiv");

    userType.addEventListener("change", function() {
        const selected = this.value;

        if (selected === "student") {
            rollDiv.style.display = "block";
            deptDiv.style.display = "none";
        } else if (selected === "teacher") {
            rollDiv.style.display = "none";
            deptDiv.style.display = "block";
        } else {
            rollDiv.style.display = "none";
            deptDiv.style.display = "none";
        }
    });
</script>

</body>
</html>
