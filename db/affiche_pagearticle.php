<?php 
// On appelle le fichier de connexion Mysql 
require_once 'connDb.php';

// On recupere l'article via GET id pour un article et ses images ( table image )

$sqlarticle = "SELECT * FROM article 
LEFT JOIN `image` ON article.id_article = `image`.id_article
WHERE article.id_article=".$_GET['id_article']."";
$requetearticle = $pdo ->prepare($sqlarticle);
$requetearticle ->execute(); 
$rowarticle =$requetearticle->fetch();


/* afficher all images post */

$sqlimages = "SELECT * FROM article 
LEFT JOIN `image` ON article.id_article = `image`.id_article
WHERE article.id_article=".$_GET['id_article']."";
$requeteimages = $pdo ->prepare($sqlimages);
$requeteimages ->execute(); 
$rowimages =$requeteimages->fetchAll();

/* jointure table categorie / article */

$sqlcatearticle = "SELECT * FROM article 
LEFT JOIN `categorie` ON article.id_article = categorie.id_categorie
WHERE article.id_article=".$_GET['id_article']."";
$requetecatarticle = $pdo ->prepare($sqlcatearticle);
$requetecatarticle->execute(); 
$rowcatarticle =$requetecatarticle->fetchAll();


/* jointure table article / possede / tags */

$sqlarticletag = "SELECT * FROM article
    INNER JOIN possede ON article.id_article = possede.id_article
    INNER JOIN tag ON tag.id_tag = possede.id_tag
    WHERE article.id_article =".$_GET['id_article']."";
    $requetearticletag = $pdo ->prepare($sqlarticletag);
    $requetearticletag->execute(); 
    $rowarticletags =$requetearticletag->fetchAll();
    




?>