<?php

require 'connectdb.php';

$query = "SELECT * FROM users WHERE id_users = ?";
$retour = $dbh -> prepare($query);
$retour->execute(array($_GET['id_users']));

$resultat = $retour->fetch(PDO::FETCH_ASSOC);

var_dump($resultat);
die;

?>