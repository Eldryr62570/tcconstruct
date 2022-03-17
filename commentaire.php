<?php

    session_start();
    // appel db
    require_once('db/connectdb.php');


    /* $dataUser = 'SELECT * FROM users';
    foreach  ($db->query($dataUser) as $row) {
            echo $row['nom']."<br/>";
    } */

    
    $articleCourant = null;

    if(isset($_GET['id'])){

        $dataArticle = 'SELECT id_article FROM article';
        $getArticle = htmlspecialchars($_GET['id']);
        foreach($dbh->query($dataArticle) as $row){
            if ($row['id_article'] == $getArticle) {
                $articleCourant = $row;
            }
        }
    
    $user = 1;

        
    if (isset($user)/* ($_SESSION['user']) */) {?>
    <section id="section-commentaire">
        <form action="db/traitement-commentaire.php?id=<?php echo $_GET['id'] ?>" method="post">
            <h2>Laisser un commentaire :</h2>
                <input type="hidden" name="userID" value="<?php echo $user?>">
                <label>
                    <textarea type="text" name="commentaire" maxlength="500" placeholder="Votre commentaire (500 caractères)"></textarea>
                    <span id="counter-commentaire">500</span>
                </label>
                <input type=submit name="commenter" value="Poster">
            </div>
        </form>
    <?php } else {
        echo "Vous devez <a href='commentaire.php?login'>être connecté</a> pour publier un commentaire.";
    }

    $sqlCommentaire = 'SELECT * FROM commentaire INNER JOIN users ON users.id_users = commentaire.id_users ORDER BY date_commentaire';
        foreach  ($dbh->query($sqlCommentaire) as $row) {
            if ($_GET['id'] == $row['id_article']) { ?>
            <div class="container-type-commentaire">
                <div class="visu-commentaire">
                    <div class="pp-commentaire"><img src="<?php echo $row['photo'];?>"></div>
                    <div class="container-commentaire">
                        <div class="data-commentaire">
                            <div class="prenom_commentaire"><?php echo $row['prenom'].' '.$row['nom'];?></div>
                            <?php $date = new DateTime($row['date_commentaire']);?>
                            <div><?php echo $date->format('d-m-Y H:i');?></div>
                        </div>
                        <div class="texte-commentaire"><?php echo $row['texte_commentaire'];?></div>
                    </div>
            </div>
            </div>
            <?php
            }
        }   
    }
?>
</section>

<link rel="stylesheet" href="css/commentaire.css">
<script src="js/countcommentaire.js"></script>