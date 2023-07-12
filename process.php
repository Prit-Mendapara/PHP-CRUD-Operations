<html>
<head>
	<title>Write Quote - Quote Talks 2020</title>
	<style type="text/css">
		* {
			box-sizing: border-box;
		}

		body {
			font-family: sans-serif;
			background-color: #EEE;
			user-select: none;
			margin: 0;
		}

		h1,h2,h3{
			font-weight: normal;
			color: #333;
			text-align: center;
		}

		.main-head {
			text-align: center;
			margin-top: 5em;
			margin-left: 5em;
			margin-right: 5em;
			margin-bottom: 2em;
			border-bottom: solid;
			color: #333;
			font-size: 25px;
		}

		.rtnmsg {
			color: orange;
		}
	</style>
</head>
<body>
	<div class="main-head">
		<h1>Your Quote</h1>
	</div>
	<div class="user-quote">
		<h1><?php echo $un = $_POST["username"]; ?></h1>
		<h3>"<?php echo $uquote = $_POST["user_quote"]; ?>"</h3>
		<br><br>
		<?php
			include_once 'db_connection.php';
			if(isset($_POST['save']))
			{	 
				$username = $_POST['username'];
				$userquote = $_POST['user_quote'];

				$sql = "INSERT INTO userquote (username,user_quote)
				VALUES ('$username','$userquote')";

				if (mysqli_query($conn, $sql)) {
					echo "<h2><i>Your quote was just stored !</i></h2>";
				} else {
					echo "<h2>Error : </h2>" . $sql . "" . mysqli_error($conn);
				}
				header("location:userquote.php?msg=Your Quote was successfuly stored !!");
				mysqli_close($conn);
			}
			?>
	</div>
</body>
</html>