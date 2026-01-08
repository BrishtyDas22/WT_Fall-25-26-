<?php
$name = $email = $phone = $password = $confirm_password = "";
$name_error=$email_error=$phone_error=$password_error=$confirm_password_error="";
$gender = $nationality = "";
$gender_error=$nationality_error="";
$success_msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $name=trim($_POST["name"]);
 $email=trim($_POST["email"]);
 $phone=trim($_POST["phone"]);
 $password=trim($_POST["password"]);
 $confirm_password=trim($_POST["confirm_password"]);

  $gender=$_POST["gender"] ?? "" ;
$nationality=$_POST["nationality"] ?? "" ;


if(empty($name)){
    $name_error="name is required";
}
else if(!preg_match("/^[a-zA-Z ]*$/",$name)){


 $name_error="only letters allowed in name";
}


if(empty($email)){
    $email_error="email is required";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){


 $email_error="invalid email format";
}


if (empty($phone)){
     $phone_error="phone is required";
}
else if(!preg_match("/^[0-9]{10,15}$/",$phone)){


 $phone_error="phone must be 10-15 digits";
}

if(empty($password)){
    $password_error="password is required";
}
else if(strlen($password)<6){


 $password_error="must must at least 6 character";
}
if(empty($confirm_password)){
   $confirm_password_error="confirm pass is required";
}
else if($password!==$confirm_password){


$confirm_password_error="password dont match";
}

if(empty($gender)){
  $gender_error="please select gender";
}
if(empty($nationality)){
  $nationality_error="please select at least one nationality";
}



if(empty($name_error)&& empty($email_error)&& empty($phone_error)&& empty($password_error)&&  empty($confirm_password_error)&& empty($gender_error)&& empty($nationality_error))
{
    echo "<h3>Registration Successful!</h3>";
    echo "name:$name <br>";
        echo "email:$email <br>";
            echo "phone:$phone <br>";
    echo "gender:$gender <br>";
      echo "nationality:$nationality<br>";


}

}


?>