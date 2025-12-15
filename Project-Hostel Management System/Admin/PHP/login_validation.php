<?php
$id = $name = $password = "";
$id_error = $name_error = $password_error = "";
$success_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ID validation
    if (empty($_POST["id"])) {
        $id_error = "ID is required";
    } else {
        $id = trim($_POST["id"]);
    }

    // Name validation
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = trim($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Only letters and spaces allowed";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $password_error = "Password is required";
    } else {
        $password = trim($_POST["password"]);
        if (strlen($password) < 6) {
            $password_error = "Password must be at least 6 characters";
        }
    }

    // Success
    if (empty($id_error) && empty($name_error) && empty($password_error)) {
        $success_msg = "Login Successful";
           echo "<h3>Your Input:</h3>";
        echo "Student ID: ".$id."<br>";
        echo "Name: ".$name."<br>";
        echo "Password: ".$password."<br>";
        $id = $name = $password = "";
    }
   
}
?>

