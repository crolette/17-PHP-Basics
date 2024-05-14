<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>

<body>

	<h1>POST</h1>
		<?php 
		if (isset($_POST['name'], $_POST['lang'])) {
			$name = $_POST['name'];
			$lang = $_POST['lang'];
			echo '<p>Hello Mister ' . $name . '</p>';
			echo '<p>Your prefered language is : ' . $lang . '</p>';
		}
		?>

</body>

</html>