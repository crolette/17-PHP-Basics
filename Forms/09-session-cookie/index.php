<!DOCTYPE html>

<?php 

	ini_set('session.gc_maxlifetime', 60);
	session_set_cookie_params(60);
	session_start();

	if(isset ($_SESSION['counter'])) {
		$_SESSION['counter']+=1;
	} else {
		$_SESSION['counter'] = 1;
	}


	$my_msg = "SESSION : This page has been visited " . $_SESSION['counter'] . "time during this session";
?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SESSION - COOKIES</title>
</head>

<body>

	<h1>SESSION - COOKIES</h1>
	
	<h2>SESSION</h2>

	<?php 
	echo $my_msg;
	?>

	<br>

	<h2>COOKIES</h2>

	<?php 
	// setcookie('cookiename[0]', 'value1');
	// setcookie('cookiename[1]', 'value2');

	// echo $_COOKIE['cookiename'][0];
	// echo $_COOKIE['cookiename'][1];


	$new_value = 'value newcookie';

	// Setting the cookie
	setcookie("newcookie", $new_value, strtotime( '+30 days' ), '/');

	// Checking if the cookie is set and displaying its value
	if (isset($_COOKIE["newcookie"])) {
		echo "Cookie value before deletion: " . $_COOKIE["newcookie"];
	} else {
		echo "Cookie is not set yet.";
	}




	
	?>
	<br><br>

	<?php 
	$arr_cookie_options = array (
					'expires' => strtotime( '+30 days' ), 
					'path' => '/', 
					'domain' => '', // leading dot for compatibility or use subdomain
					'secure' => true,     // or false
					'httponly' => false,    // or false
					'samesite' => 'Lax' // None || Lax  || Strict
					);
	setcookie('TestCookie', 'The Cookie Value', $arr_cookie_options);  
	print_r($_COOKIE);

	?>

	<br>

	<?php 
	$arr_cookie_options = array (
					'expires' => strtotime( '+30 days' ), 
					'path' => '17-PHP-Basics/Forms/09-session-cookie/', // this cookie will only be visible within this path
					'domain' => '', // leading dot for compatibility or use subdomain
					'secure' => true,     // or false
					'httponly' => false,    // or false
					'samesite' => 'Lax' // None || Lax  || Strict
					);
	setcookie('09-session-cookie', 'Cookie 09-session-cookie', $arr_cookie_options);  
	print_r($_COOKIE);

	?>
	<br>

	<?php 
	
	// Serialize the array and set the cookie
	$data = array("value1", "value2", "value3");
	$cookie_value = json_encode($data); // Serialize array to JSON
	setcookie("myArrayCookie", $cookie_value, time() + 3600, '/'); // Set cookie with 1-hour expiration

	// Retrieve and deserialize the cookie value
	if (isset($_COOKIE["myArrayCookie"])) {
		$cookie_value = $_COOKIE["myArrayCookie"];
		$data = json_decode($cookie_value, true); // Deserialize JSON to array

		echo "Cookie value as array:<br>";
		print_r($data); // Display the array
	} else {
		echo "Cookie is not set.<br>";
	}

	?>


</body>

</html>