<?php 
    require_once('connexion.php');

    function getEmail($email) {
        try {
            
            $statement = $db->prepare('SELECT email FROM users WHERE email = :email');
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->execute();
            $email = $statement->fetch(PDO::FETCH_ASSOC);
            echo 'EMAIL : ';
            var_dump($email);
            if(!$email) {
                return false;
            } else {
                return true;
            }


        } catch (Exception $e) {
                echo $e->getMessage();
                throw $e;
                return false;
        } finally {
                // close the connection to the db and the query
                $db = null;
                $statement = null;
            }
    }
?>
