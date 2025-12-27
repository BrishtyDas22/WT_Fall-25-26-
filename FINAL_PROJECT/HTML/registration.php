<?php include"../PHP/register_validation.php";?>
<!DOCTYPE html>

<head>
   <title>Admin Registration</title>
    
</head>
<body>
  <h1>Admin Registration</h1>  
  <form method="post" action ="">
Name:<br>
<input type="text" name="name" value="<?php echo $name;?>"><br> <br>
<?php echo $name_error;?>
 Email:<br>
 <input type="email" name="email" value="<?php echo $email;?>"><br> <br>
 <?php echo $email_error;?>
 Phone:<br>
<input type="text" name="phone" value="<?php echo $phone;?>"><br> <br>
 <?php echo $phone_error;?>
Password:<br>
 <input type="password" name="password" value="<?php echo $password;?>"><br> <br>
 <?php  echo $password_error;?>
Confirm Password:<br>
 <input type="password" name="confirm_password" value="<?php echo $confirm_password;?>"><br> <br>
 
<?php echo $confirm_password_error;?>
Nationality:<br>
<select name="nationality" id="nationality">
    <option value="">Select Nationality</option>
    <option value="Bangladesh" <?php if($nationality=="Bangladesh") echo "selected"; ?>>Bangladesh</option>
    <option value="Indian" <?php if($nationality=="Indian") echo "selected"; ?>>Indian</option>
    <option value="USA" <?php if($nationality=="USA") echo "selected"; ?>>USA</option>
    <option value="Others" <?php if($nationality=="Others") echo "selected"; ?>>Others</option>
</select><br>
<?php echo $nationality_error; ?>

Gender:<br>
<input type="radio" name="gender" value="male" <?php if($gender=="male") echo "checked"; ?>> Male<br>
<input type="radio" name="gender" value="female" <?php if($gender=="female") echo "checked"; ?>> Female<br>
<input type="radio" name="gender" value="others" <?php if($gender=="others") echo "checked"; ?>> Others<br>
<?php echo $gender_error; ?>


<br> <br>

<input type="submit" name="submit" value="Register">
</form>
</body>
</html>






