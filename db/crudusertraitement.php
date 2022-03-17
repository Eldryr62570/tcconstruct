<?php

require("connectdb.php");


$sqlRequest = "SELECT id_users,nom,prenom,mail,phone,adresse,photo,code_postal,ville,nom_role FROM users INNER JOIN role ON users.id_role = role.id_role";
$allusers = $dbh -> prepare($sqlRequest);
$allusers->execute();

