<?php 
    try
    {
        $dbh = new PDO('mysql:host=localhost;dbname=tcconstruct;charset=utf8', 'root', '1234',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }