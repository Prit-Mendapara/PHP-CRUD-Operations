<?php  
    session_start();
?>
<html>
<head lang="en">  
    <title>Admin Login - Quote Talks 2020</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="admin_login-style.css">  
</head>
<body>
    <div class="main">
        <h1 class="login-head" align="center">Admin Login</h1>
        <form role="form" method="post" action="admin_login.php" class="login-form">  
            <input class="un" placeholder="Admin Name" name="admin_name" type="text" autofocus>
            <input class="pwd" placeholder="Password" name="admin_pass" type="password" value="">
            <br><br>
            <input class="login-btn" type="submit" value="login" name="admin_login">
        </form>
        <div class="pwd-forgot">
            <p>Go to - <a href="index.php">Quote Talks 2020</a></p>
        </div>  
    </div>
</body>
</html>
<?php  
    include("db_connection.php");  
      
    if(isset($_POST['admin_login']))
    {  
        $admin_name=$_POST['admin_name'];  
        $admin_pass=$_POST['admin_pass'];  
      
        $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
      
        $run_query=mysqli_query($dbcon,$admin_query);  

        if(mysqli_num_rows($run_query))  
            {  
                echo "<script>window.open('view_users.php','_self')</script>";  
          
                $_SESSION['admin_name']=$admin_name;          
            }  
            else  
            {  
              echo "<script>alert('Admin Details are incorrect..!')</script>";  
            } 
    }
?>