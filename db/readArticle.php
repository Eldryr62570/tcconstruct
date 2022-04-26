<?php 
    require("connectdb.php");
    $sqlRequest = "SELECT possede.id_article,nom_tag FROM article
    INNER JOIN possede ON article.id_article = possede.id_article
    INNER JOIN tag ON tag.id_tag = possede.id_tag";

    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute();
    $tagJoin = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    $sqlRequest = "SELECT * FROM article INNER JOIN categorie ON article.id_categorie = categorie.id_categorie";
    $article = $dbh -> prepare($sqlRequest);
    $article->execute();
    
    $sqlRequest = "SELECT id_article, nom_categorie FROM categorie c,article a WHERE a.id_categorie = c.id_categorie";
    $categories = $dbh -> prepare($sqlRequest);
    $categories->execute();
    
    $i = 1;
    
?>