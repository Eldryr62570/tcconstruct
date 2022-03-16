<?php 
// On appelle le fichier de connexion Mysql 
require_once 'app/db/connDb.php';
// On recupere l'article via son ID
$sqlarticle = "SELECT * FROM article WHERE id_article=".$_GET['id_article']."";
$requetearticle = $pdo ->prepare($sqlarticle);
$requetearticle ->execute(); 
$rowarticle =$requetearticle->fetch();
?>



<div class="container mb80">
            <div class="vtimeline-block">
                    <a href="#"><img src="img/article/<?php echo $rowarticle['imgp_article']?>" height="400" width="1100" alt="" class="img-fluid mb20"></a>
                    <a href="#"><h3 class="postname"><?php echo $rowarticle['titre_article'] ; ?></h3></a>

                     <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">tc-construction</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i><a href="#"><?php echo $rowarticle['date_article'];?></a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-folder"></i> <a href="#">Dossier</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">Tags</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">Tags</a>
                        </li>
                        
                    </ul>
                    
                    <div class="descarticle">
                        <h4>Description<br></h4>
                        <p><?php  echo $rowarticle['contenu_article'] ?></p>
                        <hr class="light">
                    </div>

                    <div class="critarticle">
                        <h4>Critères<br></h4>
                        <div class="container-crit">
                            <div class="column-left"><i class="fa fa-wrench" aria-hidden="true"></i>
                             En construction</div>
                            <div class="column-center"><i class="fa fa-home"></i> 
                            Maison : 97m²</div>
                            <div class="column-right"><i class="fa fa-area-chart" aria-hidden="true"></i>
                            Terrain : 172m²</div>
                        </div>
                        <hr class="light">
                    </div>

                    
                <div class="presimg"><h4><i class="fa fa-image"></i>Photos</h4></div>
                <div class="gallery">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="340" height="300">
                    </a>
                    <div class="desc">description</div>
                </div>
                
            
                 <div class="gallery">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="340" height="300">
                    </a>
                    <div class="desc">description</div>
                </div>  

                <div class="gallery">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="340" height="300">
                    </a>
                    <div class="desc">description</div>
                </div>

                <div class="gallerybig">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="490" height="340">
                    </a>
                    <div class="desc">description</div>
                </div>   

                <div class="gallerybig">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="490" height="340">
                    </a>
                    <div class="desc">description</div>
                </div>

                <div class="boutonarticle">
                    <button type="button" class="btn btn" style="background-color: #F0542C; color:white; border-radius:2em;"><a href="contact.php"><i class="fa fa-user"></i> Contactez-nous pour un devis personnalisé</a></button>
                </div>

                <div class="boutonarticle1">
                    <button type="button" class="btn btn-secondary"><a href="actualite_article.php?id_article=<?php echo $dataarticle['id_article'] ?>"><i class="fa fa-arrow-left"></i> Article Précédent</a></button>
                </div>

                <div class="boutonarticle2">
                    <button type="button" class="btn btn-secondary">Article Suivant <i class="fa fa-arrow-right"></i></button>
                </div>
        </div>
</div>