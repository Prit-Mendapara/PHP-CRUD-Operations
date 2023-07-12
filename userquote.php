<?php  
	session_start(); 
	if(!$_SESSION['email'])  
	{ 
	    header("Location: login.php");  
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Write Your Quote - Quote Talks 2020</title>
	<link rel="icon" type="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="userquote-style.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  	<div class="main">
  		<div class="back-btn">
  			<a href="index.php"><i class="fa fa-angle-double-left fa-2x" aria-hidden="true"></i></a>
  		</div>
  		<div class="return-msg" align="center">
	  		<?php 
				if (isset($_GET["msg"]))
				{
					 echo "<h3>{$_GET["msg"]}</h3>";
				}
			?>
		</div>
    	<h1 class="head" align="center">"Write Your Quote"</h1>
	    <form action="process.php" method="post" class="write-quote-form">
	      	<input type="text" name="username" class="un" align="center" placeholder="Username" required>
	      	<textarea class="writequote" name="user_quote" align="center" placeholder="Here, You can write your own quote..." required></textarea>
	      	<br><br>
	      	<button type="submit" name="save" class="written-btn">Written</button>
	    </form>
   	</div>
</body>
</html>
