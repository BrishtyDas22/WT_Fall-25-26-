<?php include"../PHP/login_validation.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
       <link rel="stylesheet" href ="../CSS/Login.css">
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form method="post" action="">

        <label>ID</label>
        <input type="text" name="id" value="<?php echo $id ?? ''; ?>">
        <div class="error"><?php echo $id_error ?? ''; ?></div>

        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name ?? ''; ?>">
        <div class="error"><?php echo $name_error ?? ''; ?></div>

        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password ?? ''; ?>">
        <div class="error"><?php echo $password_error ?? ''; ?></div>

        <input type="submit" value="Login">
    </form>

    <?php if (!empty($success_msg)) { ?>
        <div class="success"><?php echo $success_msg; ?></div>
    <?php } ?>

</div>

</body>
</html>