<?php
    header("Content-Type:application/json");
    require_once('Model/Users.php');
    require_once 'config.php';
    
    try {
        $pdo = new Connexion();
        $connexion = $pdo->GetConnexion2();
        $user = new Users();
        $id = "rdesruelle";
//        $user->GetUser($connexion, $id);
        $user->GetAllUsers($connexion);
        $login = $user->Connexion($connexion,"rdesruelle", "test");
        echo $login;

    } catch (Exception $ex) {
        echo 'oupssss';
    }
    
//    $user->GetValue("rdesruelle", "Desruelle", "Romain", 31)
?>
