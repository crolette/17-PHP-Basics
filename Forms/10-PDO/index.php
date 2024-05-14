<!DOCTYPE html>
<?php 
	define("HOST", "127.0.0.1");
	define("DB", "classicmodels");
	define("PORT", "3306");
	define("LOGIN", "root");
	define("PASSWORD", "");

	try {
		$db = new PDO("mysql:host=".HOST.";dbname=".DB.";port=".PORT, LOGIN, PASSWORD);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $db->prepare("SELECT * FROM products");
		$statement->execute();
		$products = $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (Exception $e) {
		echo $e->getMessage();
		throw $e;
		exit;
	} finally {
		// close the connection to the db and the query
		$db = null;
		$statement = null;
	}


	ini_set('display_errors', 1);
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
?>

<!-- prepared statement  -->
<?php
	// try {
	// 	$db = new PDO("mysql:host=".HOST.";dbname=".DB.";port=".PORT, LOGIN, PASSWORD);
	// 	$stmt = $db->prepare("INSERT INTO products (productName, productCode, productLine, productDescription, productScale, quantityInStock, buyPrice, MSRP, productVendor) VALUES (:name, :code, :line, :description, :scale, :quantity, :price, :msrp, :vendor)");
	// 	$stmt->bindParam(':name', $name);
	// 	$stmt->bindParam(':code', $code);
	// 	$stmt->bindParam(':line', $line);
	// 	$stmt->bindParam(':description', $description);
	// 	$stmt->bindParam(':scale', $scale);
	// 	$stmt->bindParam(':quantity', $quantity);
	// 	$stmt->bindParam(':price', $price);
	// 	$stmt->bindParam(':msrp', $msrp);
	// 	$stmt->bindParam(':vendor', $vendor);
	// 	// insert one row	
	// 	$name = 'firstTest';
	// 	$code = "S99_9998";
	// 	$line = "Planes";
	// 	$description = "This is a test product";
	// 	$scale = "1/99999";
	// 	$quantity = 25;
	// 	$price = 8888.88;
	// 	$msrp = 9999.99;
	// 	$vendor = "Min Lin Diecast";
	// 	$stmt->execute();
	// } catch (PDOException $e) {
	// 	// echo $e;
	// 	throw $e;
	// } finally {
	// 	// close the connection to the db and the query
	// 	$db = null;
	// 	$statement = null;
	// }
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDO</title>
</head>

<body>

	<h1>PDO</h1>
	<?php 
	foreach ($products as $product):
	?>
	<li>
		<?php echo $product["productName"]?>
	</li>
	<?php 
	endforeach;?>
	<h2>xxx</h2>



</body>

</html>