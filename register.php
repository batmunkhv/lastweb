<?php require("register.class.php");?>
<?php 
    if(isset($_POST["submit"])){
        $user = new RegisterUser($_POST['username'],$_POST['password'],$_POST['email'],$_POST['country'],$_POST['age']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginBox">
       
        <h2>Register</h2>
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <p>Username</p>
            <input type="text" name="username" required="">
            <p>Email</p>
            <input type="text" name="email" placeholder="">
            <p>Age</p>
            <input type="number" name="age" placeholder="">
            <p>Country</p>
            <input type="text" name="country" placeholder="">
            <p>Password</p>
            <input type="password" name="password" placeholder="******">
            <input type="submit" name="submit" value="Register">

            <a href="login.php">Login Here</a>

<p class="error"></p>
  <p class="success" ></p>

  <p class="error"><?php echo @$user->error ?></p>
  <p class="success"><?php echo @$user->success ?></p>
        </form>
    </div>
</body>
</html>
