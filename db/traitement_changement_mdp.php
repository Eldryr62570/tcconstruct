<?php
session_start();
require_once "connectdb.php";

if(isset($_POST['mdp']) && isset($_POST['confirm_mdp']) && isset($_POST['token'])){
    if(!empty($_POST['mdp']) && !empty($_POST['confirm_mdp']) && !empty($_POST['token'])){ 
      $password = htmlspecialchars($_POST['mdp']);
      $confirm_password = htmlspecialchars($_POST['confirm_mdp']);
      $token = htmlspecialchars($_POST['token']);
      
      $check = $dbh->prepare('SELECT * FROM users WHERE token = ?');
      $check->execute(array($token));
      $row = $check->rowCount();

      if($row){
            $cost = ['cost' => 12];
            $password = password_hash($password, PASSWORD_BCRYPT, $cost);

            $update = $dbh->prepare('UPDATE users SET password = ? WHERE token = ?');
            $update->execute(array($password, $token));

            $delete = $dbh->prepare('DELETE FROM password_recover WHERE token_user = ?');
            $delete->execute(array($token));

            header('Location:../connexion.php?sucess');
            }
          }
        }else{
          echo "compte non existant";
        }