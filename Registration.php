<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registration - Quote Talks 2020</title>
    <link rel="icon" type="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="reg-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head> 
<body>
    <div class="main">
        <h1 class="login-head" align="center">Registration</h1> 
        <form method="post" action="registration.php " class="login-form">
            <input class="un" placeholder="Username" name="name" type="text" required autofocus> 
            <input class="un" placeholder="E-mail" name="email" type="email" required>
            <input class="pwd" placeholder="Set Your Password" name="pass" type="password" value="">
            <input class="login-btn" type="submit" value="register" name="register">
            <br><br><br>  
            <div class="pwd-forgot">
                <center>Already registered ?&nbsp;<a href="login.php">Login here</a></center>
            </div>
        </form> 
    </div>
</body>
</html>
<?php  
  
include("db_connection.php");  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass']; 
    $user_email=$_POST['email']; 

    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
        exit();  
    }

    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('login.php','_self')</script>";  
    }  
} 
?>