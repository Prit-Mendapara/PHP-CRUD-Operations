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
    <title>Welcome to Quote Talks 2020</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body, html {
			scroll-behavior: smooth;
		}
	</style>
</head>
<body>
<?php require 'navbar.html'; ?>
	<div id="home"><br></div>
	<div class="main-head">
		<a href="index.php" style="text-decoration: none;"><h1>Welcome to Quote Talks 2020&nbsp;&nbsp;<b><?php echo $_SESSION['email']; ?></b></h1></a>
	</div>
	<a href="index.php" style="text-decoration: none;">
		<h1 class="big-head" title="Quote of The Day">"Quote of The Day"</h1>
	</a>
	<br>
	<center>
		<a href="#scroll"><img src="images/scroll.gif" width="150px" class="scroll"></a>
	</center>
	<div id="scroll"></div>
	<div class="quote-block">
		<h2>Quote of the Day</h2>
		<hr>
		<p>All wish to possess knowledge, but few, comparatively speaking, are willing to pay the price.</p>
		<small title="Author">Juvenal</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Love Quote of the Day</h2>
		<hr>
		<p>Love and fear. Everything the father of a family says must inspire one or the other.</p>
		<small title="Author">Joseph Joubert</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Art Quote of the Day</h2>
		<hr>
		<p>Work on the accent, it will enliven the whole.</p>
		<small title="Author">Pierre Bonnard</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Nature Quote of the Day</h2>
		<hr>
		<p>Rose is a rose is a rose is a rose...</p>
		<small title="Author">Gertrude Stein</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Funny Quote of the Day</h2>
		<hr>
		<p>Most of what we call management consists of making it difficult for people to get their work done.</p>
		<small title="Author">Peter Drucker</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Positive Quote of the Day</h2>
		<hr>
		<p>“The joy of life comes from our encounters with new experiences, and hence there is no greater joy than to have an endlessly changing horizon, for each day to have a new and different sun.”</p>
		<small title="Author">Christopher McCandless</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Brainy Quote of the Day</h2>
		<hr>
		<p>It is better to keep your mouth closed and let people think you are a fool than to open it and remove all doubt.</p>
		<small title="Author">Mark Twain</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Great Quote of the Day</h2>
		<hr>
		<p>Some are born great, some achieve greatness, and some have greatness thrust upon them.</p>
		<small title="Author">William Shakespeare</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Inspirational Quote of the Day</h2>
		<hr>
		<p>The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart.</p>
		<small title="Author">Helen Keller</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Truth Quote of the Day</h2>
		<hr>
		<p>All truth passes through three stages. First, it is ridiculed. Second, it is violently opposed. Third, it is accepted as being self-evident.</p>
		<small title="Author">Arthure Schopenhauer</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<div class="quote-block">
		<h2>Imagination Quote of the Day</h2>
		<hr>
		<p>Logic will get you from A to B. Imagination will take you everywhere.</p>
		<small title="Author">Albert Einstein</small>
		<br><br><br>
		<center>
			<img src="images/tt.png" width="40px" title="Share on Twitter">
			<img src="images/fb.png" width="35px" title="Share on Facebook">
			<img src="images/wp.png" width="40px" title="Share on Whatsapp">
		</center>
	</div>
	<center>
		<img src="images/end.png" width="40%">
		<footer id="follow">
			<h1>Follow Us</h1>
			<br><br>
			<a href="#" title="Follow on Facebook" class="fa fa-facebook fa-2x follow"></a>
			<a href="#" title="Follow on Twitter" class="fa fa-twitter fa-2x follow"></a>
			<a href="#" title="Follow on Instagram" class="fa fa-instagram fa-2x follow"></a>
			<a href="#" title="Follow on Whatsapp" class="fa fa-whatsapp fa-2x follow"></a>
			<br><br>
			<h2 title="Our Vision">We give wings to your thought, You decide where to fly.</h2>
		</footer>
	</center>
<script>
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    document.getElementById("navbar").style.top = "0";
	  } else {
	    document.getElementById("navbar").style.top = "-100px";
	  }
	}
</script>
</body>
</html>