<?php 

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
        $adresse_user = htmlspecialchars($_POST["adresse_us"])
    }
    if(isset($_POST["photo_us"])&&(!empty($_POST["photo_us"]))){
        $photo_user = htmlspecialchars($_POST["photo_us"])
    }
    if(isset($_POST["postal_us"])&& (!empty($_POST["postal_us"]))){
        $postal_user = htmlspecialchars($_POST["postal_us"])
    }
    if(isset($_POST["ville_us"])&& (!empty($_POST["ville_us"]))){
        $ville_user = htmlspecialchars($_POST["ville_us"])
    }
    if(isset($_POST["ville_us"])&& (!empty($_POST["ville_us"]))){
        
    }
    if(isset($_POST["role_us"])&& (!empty($_POST["role_us"]))){

    }