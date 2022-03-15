<?php
    require("connectdb.php");
    if(isset($_POST)){
        if(isset($_POST["name"]) && (!empty($_POST["name"]))){
            $name = htmlspecialchars($_POST["name"]);            
        }
        if(isset($_POST["firstname"]) && (!empty($_POST["firstname"]))){
            $firstname = htmlspecialchars($_POST["firstname"]);
        }
        if(isset($_POST["mail"]) && (!empty($_POST["mail"]))){
            $mail = htmlspecialchars($_POST["mail"]);
        }
        if(isset($_POST["password"]) && (!empty($_POST["password"]))){
            $password = md5(htmlspecialchars($_POST["password"]));
        }
        if(isset($_POST["passwordc"]) && (!empty($_POST["passwordc"]))){
            $passwords = md5(htmlspecialchars($_POST["passwordc"]));
        }
        if(isset($_POST["phone"]) && (!empty($_POST["phone"]))){
            $phone = htmlspecialchars($_POST["phone"]);
        }
        if(isset($_POST["adresse"]) && (!empty($_POST["adresse"]))){
            $adresse = htmlspecialchars($_POST["adresse"]);
        }
    }else{
        
    }

    $pdoStat = $dbh->prepare('SELECT * FROM users WHERE mail = ?');

    $pdoStat->execute(array($mail));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);

    if ($mail == $row['mail']) {
        header('Location: ../inscription.php?error');
    } else if ($password != $passwords) {
        header('Location: ../inscription.php?mdperror');
    } else {
        $sqlRequest = "INSERT INTO `users` (`nom`, `prenom`, `mail`, `password`, `phone`, `adresse`, `id_role`) 
                        VALUES (?,?,?,?,?,?,'1');";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array($name,$firstname,$mail,$password,$phone,$adresse));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../connexion.php?sucess');
    }

?>