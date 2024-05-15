<?php 
    require_once('connexion.php');
    	try {
		
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


	
?>