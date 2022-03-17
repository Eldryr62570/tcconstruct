<?php

session_unset($_SESSION);
session_destroy();
header('Location: ../account.php');

?>