<?php 
require_once 'db/connDb.php'; 

$sqlarticles = ("SELECT * FROM article WHERE id_article ");
$requetearticles = $pdo->query($sqlarticles);
$dataarticles = $requetearticles->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php  foreach ($dataarticles as $dataarticle) {?>
   <a href="actualite_article.php?id_article=<?php echo $dataarticle['id_article'] ?>"> <?php echo $dataarticle['titre_article'];?></a> <br>
    <?php } ?>


</body>
</html>