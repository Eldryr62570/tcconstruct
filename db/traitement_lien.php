<?php
// ici on demarre la session PHP
session_start();
require_once "connectdb.php";

if(isset($_GET['u']) && isset($_GET['token']) && !empty($_GET['u']) && !empty($_GET['token'])){
    $u = htmlspecialchars(base64_decode($_GET['u']));
    $token = htmlspecialchars(base64_decode($_GET['token']));

    $check = $dbh->prepare('SELECT * FROM password_recover WHERE token_user = ? AND token = ?');
    $check->execute(array($u, $token));
    $row = $check->rowCount();

    if($row){
        $get = $dbh->prepare('SELECT token FROM users WHERE token = ?');
        $get->execute(array($u));
        $data_u = $get->fetch();

        if(hash_equals($data_u['token'], $u)){
            header('Location:../chang_mdp.php?sucess&u='.base64_encode($u));
        }else{
            echo "Erreur de compte";
        }
    }else{
            echo "Erreur : compte non valide";
    }
}else{
    echo "Lien non valide";
}