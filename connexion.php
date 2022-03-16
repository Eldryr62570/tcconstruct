<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
    <link rel="stylesheet" href="styleconnexion.css">
    <script src="https://kit.fontawesome.com/eaf2c4b5d9.js" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="slick.css">
</head>
<body>

    

    <div class="formulaire-connexion">
    <div class="connexion-bg"><h1>CONNEXION</h1></div>
    <form action="traitement_connexion.php" method="post">
        E-mail: <input type="mail" name="mail" />
        <br />
        Mot de passe: <input type="password" name="mdp" />
        <br />
        <input type="submit" name="connexion" value="Connexion" class="boutton-connexion" />
    </form>
</div>
</body>