<!DOCTYPE html>
<?php  

    session_start();  

?>  
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>

<body>

	<h1>GET - POST</h1>
	<h2>GET</h2>

	<form method="get" action="index.php">
		<label for="name">Name</label>
	  <input type="text" name="name" id="name">
	  <label for="lang">Lang</label>
	  <input type="text" name="lang" id="lang">
	  <input type="submit" value="submit">
	</form>

	<?php
	
	function greeting() {
		if(isset($_GET['name'], $_GET['lang'])) {
			$name = $_GET['name'];
			$lang = $_GET['lang'];
			echo '<p>Hello, ' . $name . '</p>';
			echo '<p> Your language is : ' . $lang . '</p>';
		}
	}

	greeting();

	// if(isset($_GET['name'], $_GET['lang'])) {
	// 	$name= $_GET['name'];
	// 	$lang= $_GET['lang'];
	// 	echo '<p> Your name is : ' . $name . '</p>';
	// 	echo '<p> Your language is : ' . $lang . '</p>';
	// }
	
	?>



	<h2>POST</h2>

		<form method="post" action="post.php">
		<label for="name">Name</label>
	  <input type="text" name="name" id="name">
	  <label for="lang">Lang</label>
	  <input type="text" name="lang" id="lang">
	  <input type="submit" value="submit">
	</form>

		<?php 
		if (isset($_POST['name'], $_POST['lang'])) {
			$name = $_POST['name'];
			$lang = $_POST['lang'];
			echo '<p>Hello Mister ' . $name . '</p>';
			echo '<p>Your prefered language is : ' . $lang . '</p>';
		}
		?>

		<br>
		<br>

		<?php
	$str = '<h1>♠ ♣ ♥</h1>';
	echo htmlspecialchars($str);
	?>

	<?php
	$str = '<h1>♠ ♣ ♥</h1>';
	echo htmlentities($str);
	?>
<br>
	<?php 
	echo $_SESSION['counter'];
	?>
<br>
<?php 
	// Deleting the cookie defined in another page
	setcookie("newcookie", "", strtotime( '-30 days' ), '/');
	echo "<br>Cookie has been deleted. Please reload the page to see the change.";
	?>

</body>

</html>