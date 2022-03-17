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
            $password = password_hash(htmlspecialchars($_POST["password"]),PASSWORD_DEFAULT);
        }
        if(isset($_POST["passwordc"]) && (!empty($_POST["passwordc"]))){
            $passwords = htmlspecialchars($_POST["passwordc"]);
        }
        if(isset($_POST["phone"]) && (!empty($_POST["phone"]))){
            $phone = htmlspecialchars($_POST["phone"]);
        }
        if(isset($_POST["adresse"]) && (!empty($_POST["adresse"]))){
            $adresse = htmlspecialchars($_POST["adresse"]);
        }
        if(isset($_POST["cp"]) && (!empty($_POST["cp"]))){
            $cp = htmlspecialchars($_POST["cp"]);
        }
        if(isset($_POST["ville"]) && (!empty($_POST["ville"]))){
            $ville = htmlspecialchars($_POST["ville"]);
        }
    }else{
        
    }
    
    $pdoStat = $dbh->prepare('SELECT * FROM users WHERE mail = ?');

    $pdoStat->execute(array($mail));

    $row = $pdoStat->fetch(PDO::FETCH_ASSOC);
    
    if (!empty($row)) {
        header('Location: ../inscription.php?error');
    } else if (!password_verify($passwords,$password)) {
        header('Location: ../inscription.php?mdperror');
    } else {
        $sqlRequest = "INSERT INTO `users` (`nom`, `prenom`, `mail`, `password`, `phone`, `adresse`, `code_postal`, `ville`, `id_role`,photo) 
                        VALUES (?,?,?,?,?,?,?,?,'1','aa');";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute(array($name,$firstname,$mail,$password,$phone,$adresse,$cp,$ville));
        $row = $pdoStat->fetchall(PDO::FETCH_ASSOC);
        header('Location: ../connexion.php?sucess');
    }

?>