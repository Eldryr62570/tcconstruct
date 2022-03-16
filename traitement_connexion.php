<?php
// ici on demarre la session PHP
session_start();

require_once "db/connectdb.php";


                        // on verifie que le formulaire n'est pas vide
                        if (!empty($_POST)) {

                            // il faut le mail et pass soient presents tous les deux
                            if (isset($_POST["mail"], $_POST["mdp"]) && !empty($_POST["mail"]) && !empty($_POST["mdp"])) 
                            {

                                
                                if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                                   
                                    echo "Ce n'est pas une adresse mail.";
                                }
                                else { // mail valide on passe a la suite                        
                                
                                $sql = "SELECT * FROM users WHERE mail=:mail";
                                $query = $dbh->prepare($sql);
                                $query->execute(array(
                                    ":mail" => $_POST["mail"]
                                ));
                                $membres = $query->fetch();

                                if (!$membres) { 
                                    echo "Désolé cette adresse mail et/ou le mot de pass n'existe pas.";

                                }
                                else {

                            // ici si l'utilisateur existe alors on verifie son mot de pass
                                if (!password_verify($_POST["mdp"], $membres["PASSWORD"])) {
                                    echo "Désolé cette adresse mail et/ou le mot de pass n'existe pas.";
                                }
                                else {
                                    $_SESSION["membres"] = [
                                    "id" => $membres["id_users"],
                                    "nom" => $membres["nom"],
                                    "prenom" => $membres["prenom"],
                                    "mail" => $membres["mail"]
                                ];                            

                                echo "Félicitation vous êtes connecté.<br><br>";

                                ?>

                                    <a href="#"> on met la bonne redirection</a>

                                <?php

                                    }
                                }
                            }
                        }
                    }

                        ?>