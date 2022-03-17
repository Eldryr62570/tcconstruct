<?php
    require_once('db-commentaire.php');

    $traitementCourant = null;
    $user = htmlspecialchars($_POST['userID']);

    if(isset($_GET['id'])){
        $traitementCourant = htmlspecialchars($_GET['id']);
    
    if(isset($user) && isset($_POST['commentaire']) && !empty($_POST['commentaire']))  {
        $commentaire = htmlspecialchars($_POST['commentaire']);
        if(strlen($commentaire)<= 500) {

            $insert = $db->prepare('INSERT INTO commentaire(texte_commentaire, id_users, id_article) VALUES(?, ?, ?)');
            $insert->execute(array($commentaire,$user,$traitementCourant));
            header("Location:../commentaire.php?id=".$traitementCourant."");
            } else {
                header("Location:../commentaire.php?id=".$traitementCourant."&commentaireLenght");
            }
        } 
        else {header("Location:../commentaire.php?id=".$traitementCourant."&failed");}
    } 
    else {header("Location:../commentaire.php?id=".$traitementCourant."&idManquant");}
?>