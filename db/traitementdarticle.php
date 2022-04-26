<?php 

$sqlarticle = ("SELECT * FROM article 
INNER JOIN `image` ON `image`.`id_image` = article.id_article
WHERE id_article=".$_GET['id_article']."
");
$requetearticle = $pdo ->prepare($sqlarticle);
$requetearticle ->execute(); 
$rowarticle =$requetearticle->fetch();
?>

