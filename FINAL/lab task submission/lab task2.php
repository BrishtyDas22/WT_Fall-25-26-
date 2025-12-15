<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>
<h1>Simple Registration Form</h1>

<?php

$name=$email=$dob=$gender=$degree=$blood_group="";
$name_error = $email_error = $dob_error =$gender_error=$degree_error=$blood_group_error= "";


function test_input($data) {
   $data = trim($data); 
return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Only letters and spaces allowed";
        } 
        else if (strlen($name) < 2) {
            $name_error = "Enter at least two words";
        }
    }


    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

 if (empty($_POST["dob"])) {
        $dob_error = "Date of Birth is required";
    } else {
        $dob = $_POST["dob"];
    }


     if (empty($_POST["gender"])) {
    $gender_error = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["degree"])) {
        $degree_error = "degree is required";
    } else {
        $degree = test_input($_POST["degree"]);
        if (strlen($name) < 2) {
            $degree_error = "Enter at least two words";
        }
    }
   if (empty($_POST["blood"])) {
    $blood_group_error = "Blood group is required";
} else {
    $blood_group = $_POST["blood"];
}
}
?>

<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <?php if($name_error) echo $name_error; ?>
    <br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <?php if($email_error) echo $email_error; ?>
    <br><br>

    Date of Birth: <input type="date" name="dob" value="<?php echo $dob; ?>">
    <?php if($dob_error) echo $dob_error; ?>
    <br><br>
   Gender: 
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<?php echo $gender_error; ?>
<br><br>
  degree: 
 
      
<input type="checkbox" name="degree" value="SSC"> SSC
<input type="checkbox" name="degree" value="HSC"> HSC
<input type="checkbox" name="degree" value="BSc"> BSc
<input type="checkbox" name="degree" value="MSc"> MSc

<?php echo $degree_error; ?>
<br><br>

<select name="blood">
    <option value="">Select blood</option>
    <option value="A+" >A+</option>
    <option value="B+" >B+</option>
    <option value="C+" >C+</option>

</select>
<?php echo $blood_group_error; ?>
<br><br> 
       

    
<input type="submit" name="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($name_error) && empty($email_error) && empty($dob_error)) {
    echo "<h3>Your Input:</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Date of Birth: $dob<br>";
    echo "Gender: $gender<br>";
    echo "Degree: $degree<br>";
    echo "Blood: $blood_group<br>";
     
}
?>
</body>
</html>