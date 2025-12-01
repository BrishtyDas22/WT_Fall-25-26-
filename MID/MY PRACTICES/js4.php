<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
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

        input[type="text"] {
            padding: 8px;
            margin-right: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #0077cc;
            color: white;
        }

        button:hover {
            background-color: #005fa3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #0077cc;
            color: white;
        }

        .delete-btn {
            background-color: red;
            padding: 5px 10px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Student Management System</h2>

<div>
    <input type="text" id="name" placeholder="Name">
    <input type="text" id="roll" placeholder="Roll">
    <input type="text" id="department" placeholder="Department">
    <button id="addBtn">Add Student</button>
    <p class="error" id="errorMsg"></p>
</div>

<table id="studentTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Student rows will appear here -->
    </tbody>
</table>

<script>
    const addBtn = document.getElementById("addBtn");
    const nameInput = document.getElementById("name");
    const rollInput = document.getElementById("roll");
    const deptInput = document.getElementById("department");
    const tableBody = document.querySelector("#studentTable tbody");
    const errorMsg = document.getElementById("errorMsg");

    addBtn.addEventListener("click", function() {
        const name = nameInput.value.trim();
        const roll = rollInput.value.trim();
        const dept = deptInput.value.trim();

        // Validate inputs
        if (name === "" || roll === "" || dept === "") {
            errorMsg.innerText = "All fields are required!";
            return;
        }

        errorMsg.innerText = ""; // clear error

        // Create new row
        const newRow = document.createElement("tr");

        // Create cells
        const nameCell = document.createElement("td");
        nameCell.innerText = name;

        const rollCell = document.createElement("td");
        rollCell.innerText = roll;

        const deptCell = document.createElement("td");
        deptCell.innerText = dept;

        const actionCell = document.createElement("td");
        const deleteBtn = document.createElement("button");
        deleteBtn.innerText = "Delete";
        deleteBtn.classList.add("delete-btn");

        // Delete row on button click
        deleteBtn.addEventListener("click", function() {
            tableBody.removeChild(newRow);
        });

        actionCell.appendChild(deleteBtn);

        // Append cells to row
        newRow.appendChild(nameCell);
        newRow.appendChild(rollCell);
        newRow.appendChild(deptCell);
        newRow.appendChild(actionCell);

        // Append row to table
        tableBody.appendChild(newRow);

        // Clear input fields
        nameInput.value = "";
        rollInput.value = "";
        deptInput.value = "";
    });
</script>

</body>
</html>
