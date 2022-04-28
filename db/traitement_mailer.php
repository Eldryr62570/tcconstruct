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

            $link= 'https://kylian.simplon-charleville.fr/projets/tcconstruct/chang_mdp.php?u='.base64_encode($token_user).'&token='.base64_encode($token);

            //Destinataires
           
            $to = $_POST['mail'];
           
            //Objet
           
           $subject = 'Rénitialiser le mot de passe';
           
           //Message
           
           $message ="Pour changer de mot de passe veuillez cliquer <a href='$link'>ici</a>";
           
           //Entête
           
           $headers = "From: The sender Name <kyliancontactepro@gmail.com>\r\n";
           $headers .= "Reply-To: <kyliancontactepro@gmail.com>\r\n";
           $headers .= "Content-type: text/html\r\n";
           
           //Envoie le mail
           mail($to, $subject, $message, $headers);

           //Redirection

           header('Location:../connexion.php?sucess');
        }else{
            header('Location:../mdp_oublie.php?erreur');
        }
    }
