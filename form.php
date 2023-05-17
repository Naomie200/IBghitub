<?php 
    require 'Database.php';

    if (strlen($_POST['nom']) > 1 && strlen($_POST['prenom']) > 1)strlen($_POST['email']) > 1){
        $pdo = getConnect();      
        $sql = "INSERT INTO user (nom,prenom,) VALUES(?,?,?)"; 
        $array = [$_POST['nom'], $_POST['prenom'0, $_POST['email']]]] ;  

        $query = $pdo->prepare($sql);
        $query->execute($array);
        header('location: /projet/index.php');
    }

?>