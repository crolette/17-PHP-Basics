<?php 
    require_once('config.php');

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