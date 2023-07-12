<?php
	$dbcon = mysqli_connect("localhost","root","");  
	mysqli_select_db($dbcon,"users");

	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "users";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	if(!$conn){
	   die('Could not Connect My Sql:' .mysql_error());
	}
?>