<!DOCTYPE html>
<html >
<head>
   
    <title>Student Login</title>
    <link rel="stylesheet" href ="../CSS/Login.css">
</head>
<body>
    <h1> Student Login</h1>
    <?php include '../PHP/login_validation.php';
 ?>
 <div class="login-box">
     <form method="post" action="">
Student-ID:
    <input type="number" name="id" value="<?php echo $id;?>" >
    <?php echo $id_error;?>
    <br><br>
Name:
    <input type="text" name="name" value="<?php echo $name;?>">
    <?php echo $name_error;?>
     <br><br>
 Password:
    <input type="password" name="password" value="<?php echo $password;?>">
      <?php echo $password_error;?>
       <br><br>
      <input type="submit" name ="submit" value ="Login">
       <br><br>
</form>
</div >
</body>
</html>