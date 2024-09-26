<?php
class Connexion 
{
    function GetConnexion(){
        $dsn = 'mysql:host=localhost;dbname=databaseRD';
        $username = 'userRD';
        $password = 'testrd';

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo("connexion réussie");
        } catch(PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        return $pdo;
    }
        function GetConnexion2(){
            

        $dsn = 'mysql:host=localhost;dbname=databaseRD';
        $host = 'localhost';
        $dbname = 'databaseRD';
        $username = 'userRD';
        $password = 'testrd';
        $mysqli = new mysqli($host,$username,$password,$dbname);
        
//        try {
//            $pdo = new PDO($dsn, $username, $password);
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo("connexion réussie");
//        } catch(PDOException $e) {
//            echo 'Connexion échouée : ' . $e->getMessage();
//        }
        return $mysqli;
    }
    
}


?>