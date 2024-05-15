<?php 
require 'connexion.php';
 
 $productCode = $product['productCode'];
    	try {
		global $db;
		$statement = $db->prepare("SELECT comment, username
                                    FROM comments
                                    JOIN users
                                    WHERE comments.userId = users.id
                                    AND comments.productId = :productId");
        $statement->bindParam(':productId', $productCode);
		$statement->execute();
		$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
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