<?php require("login.class.php");?>
<?php 
    if(isset($_POST["submit"])){
        $user = new LoginUser($_POST['username'], $_POST['password']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <div class="loginBox">
       
        <h2>Login</h2>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <p>Username</p>
            <input type="text" name="username" required="">
            <p>Password</p>
            <input type="password" name="password" placeholder="******">
            <input type="submit" name="submit" value="Login">
            <a href="register.php">Register here</a>

<p class="error"><?php echo @$user->error ?></p>
  <p class="success"><?php echo @$user->success ?></p> 

            
        </form>
    </div>
</body>
</html>
