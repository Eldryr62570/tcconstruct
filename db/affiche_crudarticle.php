<?php 
require_once 'connectdb.php';

/* jointure crud article tag possede */

  /*   // Récupère les données de la table clients */
$requetecrudarticles = "SELECT * FROM article 
INNER JOIN `categorie` ON article.id_article = categorie.id_categorie
INNER JOIN `image` ON article.id_article = `image`.id_image
INNER JOIN possede ON article.id_article = possede.id_article
INNER JOIN tag ON tag.id_tag = possede.id_tag

";

// le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
// l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)

$resultatcrudarticles = $dbh->prepare($requetecrudarticles);
$resultatcrudarticles->execute();

// récupe d'infos (pas utilisés ici)

