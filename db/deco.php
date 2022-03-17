<?php

session_start();
unset($_SESSION['connectee']);
header('Location: ../connexion.php')

?>