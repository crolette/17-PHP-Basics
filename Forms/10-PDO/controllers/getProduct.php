<?php 
    require_once('config.php');
        
    if(empty($_GET["code"])) {
        echo "url incorrect";
        exit;
    }

    if(!isset($_GET["code"])) {
        echo "url incorrect";
        exit;
    }

    	try {
		$db = new PDO("mysql:host=".HOST.";dbname=".DB.";port=".PORT, LOGIN, PASSWORD);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $db->prepare('SELECT * from products WHERE productCode = :codeProduct');
        $statement->bindParam(':codeProduct', $_GET['code'], PDO::PARAM_STR);
        $statement->execute();
		// $statement = $db->prepare("SELECT * FROM products WHERE productCode = ?");
		// $statement->execute([$_GET['code']]);
		$product = $statement->fetch(PDO::FETCH_ASSOC);
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