<?php
function openConn() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "wt_project";
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) { die("Connection Fail: ". $conn->connect_error); }
    return $conn;
}

// Register korar function
function addUser($conn, $name, $email, $phone, $hashedPass, $c_pass, $blood) {
    $sql = "INSERT INTO user_registration (name, email, phonenumber, password, c_password, blood) 
            VALUES ('$name', '$email', '$phone', '$hashedPass', '$c_pass', '$blood')";
    return $conn->query($sql);
}

// Login-er jonno function
function getuserforlogin($conn, $name, $email) {
   
    $sql = "SELECT * FROM user_registration WHERE name='$name' AND email='$email'";
    return $conn->query($sql);
}
?>
