<?php 
    require_once('config.php');
    require ('../utils/sanitizeUsername.php');
    require ('getUser.php');
    require ('getEmail.php');
    require ('createSession.php');

    if(isset($_POST['password'], $_POST['email'], $_POST['username'])) {
        
            $username = sanitize_username($_POST['username']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (getUser($username)) {
                $message = "User already exists";
            } elseif(getEmail($email)) {
                $message = "E-mail already registered";
            } else {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                try {
                    $db = new PDO("mysql:host=".HOST.";dbname=".DB.";port=".PORT, LOGIN, PASSWORD);
                $db->beginTransaction();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $statement = $db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
                $statement->bindParam(':username', $username, PDO::PARAM_STR);
                $statement->bindParam(':email', $email, PDO::PARAM_STR);
                $statement->bindParam(':password', $password, PDO::PARAM_STR);
                $statement->execute();
                $db->commit();
                
                createSession($username);
                    header("Location: /17-PHP-Basics/Forms/10-PDO/index.php");
            } catch (Exception $e) {
                echo $e;
                    throw $e;
                    $db->rollBack();
                    exit;
                } finally {
                    // close the connection to the db and the query
                    $db = null;
                    $statement = null;
                }
            }
    }
?>