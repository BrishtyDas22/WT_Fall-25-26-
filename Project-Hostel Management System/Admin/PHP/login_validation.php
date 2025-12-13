<?php
$id=$name=$password="";
$id_error=$name_error=$password_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//ID VALIDATION
  if (empty($_POST["id"])) {
        $id_error = "Student ID is required";
    } 
    else {
        $student_id = test_input($_POST["id"]);
        if (!preg_match("/^[0-9]*$/", $id)) 
        {
            $id_error = "Only numbers allowed";
        }
    }



//Name VALIDATION
  if (empty($_POST["name"])) {
        $id_error = "Student name is required";
    } else {
        $name= test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z  ]*$/", $name)) {
            $name_error = "Only letters and white spaces are allowed";
        }
    }
    //Password VALIDATION
  if (empty($_POST["password"])) {
        $password_error = "password is required";
    } else {
        $password= test_input($_POST["password"]);
        
    }
      if (empty($id_error) && empty($name_error) && empty($password_error)) {
        echo "<h3>Your Input:</h3>";
        echo "Student ID: ".$student_id."<br>";
        echo "Name: ".$name."<br>";
        echo "Password: ".$password."<br>";
    }
}

function test_input($data) {
    $data = trim($data);
    return $data;
}
?>
