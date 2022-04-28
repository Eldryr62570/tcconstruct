<?php
try
{
    $dbh = new PDO('mysql:host=localhost;dbname=tcconstruct;charset=utf8', 'root', '1234',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    //$dbh = new PDO('mysql:host=db5006773163.hosting-data.io;dbname=dbs5603774;charset=utf8', 'dbu2157768', 'qe8B52Fk',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
