<?php 
    require("connectdb.php");
    if(isset($_POST["nom_us"])&&(!empty($_POST["nom_us"]))){
        $nom_user = htmlspecialchars($_POST["nom_us"]);
    }
    if(isset($_POST["prenom_us"])&&(!empty($_POST["prenom_us"]))){
        $prenom_user = htmlspecialchars($_POST["prenom_us"]);
    }
    if(isset($_POST["mail_us"])&&(!empty($_POST["mail_us"]))){
        $mail_user = htmlspecialchars($_POST["mail_us"]);
    }
    if(isset($_POST["adresse_us"])&&(!empty($_POST["adresse_us"]))){
        $adresse_user = htmlspecialchars($_POST["adresse_us"]);
    }
    if(isset($_POST["phone_us"])&&(!empty($_POST["phone_us"]))){
        $phone_user = htmlspecialchars($_POST["phone_us"]);
    }
    if(isset($_POST["photo_us"])&&(!empty($_POST["photo_us"]))){
        $photo_user = htmlspecialchars($_POST["photo_us"]);
    }
    if(isset($_POST["postal_us"])&& (!empty($_POST["postal_us"]))){
        $postal_user = htmlspecialchars($_POST["postal_us"]);
    }
    if(isset($_POST["ville_us"])&& (!empty($_POST["ville_us"]))){
        $ville_user = htmlspecialchars($_POST["ville_us"]);
    }
    if(isset($_POST["ville_us"])&& (!empty($_POST["role_us"]))){
        $role_user = htmlspecialchars($_POST["role_us"]);
    }
    if(isset($_POST["mdp_us"])&& (!empty($_POST["mdp_us"]))){
        $mdp_user = password_hash(htmlspecialchars($_POST["mdp_us"]),PASSWORD_DEFAULT);
    }

        $sqlRequest = "INSERT INTO `users` (`nom`, `prenom`, `mail`, `password`, `phone`, `adresse`, `code_postal`, `ville`, `id_role`,photo) 
                        VALUES (:nom_user,:prenom_user,:mail_user,:mdp_user,:phone_user,:adresse_user,:postal_user,:ville_user,'1',:photo_user);";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array(
           "nom_user" => $nom_user,
           "prenom_user" => $prenom_user,
           "mail_user" => $mail_user,
           "mdp_user" => $mdp_user,
           "phone_user" => $phone_user,
           "adresse_user" => $adresse_user,
           "postal_user" => $postal_user,
           "ville_user" => $ville_user,
           "photo_user" => $photo_user));
        header('Location: ../paneladmin.php');

