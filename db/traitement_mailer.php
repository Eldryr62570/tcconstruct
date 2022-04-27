<?php
// ici on demarre la session PHP
session_start();
require_once "connectdb.php"; 

    if(isset($_POST["mail"]) && !empty($_POST["mail"])){
        $mail = htmlspecialchars($_POST["mail"]);

        $check = $dbh->prepare('SELECT token FROM users WHERE mail = ?');
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row){
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $token_user = $data['token'];

            $insert = $dbh->prepare('INSERT INTO password_recover(token_user, token) VALUES(?,?)');
            $insert->execute(array($token_user, $token));

            $link= 'traitement_lien.php?u='.base64_encode($token_user).'&token='.base64_encode($token);

            echo "<a href='$link'>Lien";
        }else{
            echo "Aucun compte ne correspond à cette adresse mail.";
        }
    }
