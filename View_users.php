<?php  
    session_start(); 
    if(!$_SESSION['admin_name'])  
    { 
        header("Location: admin_login.php");  
    }
?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
    <title>View Users - Quote Talks 2020</title>  
</head>  
<style type="text/css">
    body {
        background-color: #F3EBF6;
        font-family: 'trebuchet ms', sans-serif;
        user-select: none;
    }
    .login-panel {  
        margin: 3em; 
    }  
    .table {  
        margin: 4em;
        width: 90%;  
    }
    .display-4 {
        margin-top: 2em;
    }
    .navbar-brand:hover {
        opacity: 0.6;
    }
</style>
<body>
    <nav class="navbar fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="view_users.php">
        <img src="images/logo.png" width="30" height="30" class="d-inline-block" alt="" loading="lazy">
        Quote Talks 2020
      </a>
      <a class="navbar-brand" href="admin_logout.php">Logout</a>
    </nav>
    <h1 class="display-4" align="center">All the Users of Quote Talks 2020</h1>
    <div class="table-responsive">  
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>
                <tr>
                    <th>User Id</th>  
                    <th>User Name</th>  
                    <th>User Password</th>  
                    <th>User E-mail</th>  
                    <th>Delete User</th>  
                    <th>Update User</th>
                </tr>
            </thead>
            <?php  
                include("db_connection.php");  
                $view_users_query="select * from users";
                $run=mysqli_query($dbcon,$view_users_query);
              
                while($row=mysqli_fetch_array($run))
                {  
                    $user_id=$row[0];  
                    $user_name=$row[1];  
                    $user_email=$row[2];  
                    $user_pass=$row[3];
            ?>
            <tr>  
                <td><?php echo $user_id;  ?></td>  
                <td><?php echo $user_name;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                <td><?php echo $user_pass;  ?></td>  
                <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>
                <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-success">Update</button></a></td>
            </tr>
            <?php } ?>
        </table>  
    </div>  
</body>
</html>