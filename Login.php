<?php  
    session_start();
?>
<html>  
<head lang="en">  
    <title>Login - Quote Talks 2020</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="login-style.css">
</head>
<body>
    <div class="main">
        <h1 class="login-head" align="center">Login</h1>
        <form role="form" method="post" action="login.php" class="login-form">  
            <input class="un" placeholder="E-mail" name="email" type="email" autofocus required>
            <input class="pwd" placeholder="Password" name="pass" type="password" value="" required>
            <input class="login-btn" type="submit" value="login" name="login">
            <br><br><br>
            <div class="pwd-forgot">
                <center>Are you new ?&nbsp;<a href="registration.php">Register here</a></center>
            </div>
        </form>  
    </div>
</body>  
  
</html>  
  
<?php
    include("db_connection.php");  
      
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
      
        $run=mysqli_query($dbcon,$check_user);  
      
        if(mysqli_num_rows($run))  
        {  
            echo "<script>window.open('index.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
?>  