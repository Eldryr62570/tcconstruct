<?php 
 
include 'db/classearticle.php';
$customerObj = new Articles();

if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
}

if(isset($_GET['readId']) && !empty($_GET['readId'])) {
    $readId = $_GET['readId'];
    $customer = $customerObj->displyaRecordById($readId);
  }

?>


<div class="container mb80">
            <div class="vtimeline-block">
                    <a href="#"><img src="img/article/<?php echo $customer['imgp_article']?>" height="400" width="1100" alt="" class="img-fluid mb20"></a>
                    <a href="#"><h3 class="postname"><?php echo $customer['titre_article'] ; ?></h3></a>

                     <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">tc-construction</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i><a href="#"><?php echo $customer['date_article'];?></a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-folder"></i><a href="#"><?php echo $customer['nom_categorie'];?></a>
                        </li>

                        <?php foreach ($customer as $custome) { ?>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i><a href="#"><?php echo $custome['nom_tag'];?></a>
                        </li>
                        <?php } ?>
                        
                    
                        
                    </ul>
                    
                    <div class="descarticle">
                        <h4>Description<br></h4>
                        <p><?php  echo $customer['contenu_article'] ?></p>
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
                
                <?php 
                $customerimg = $customerObj->displyaRecordByIdArt($readId);
                foreach ($customerimg as $customer) { ?>
                <div class="gallery">
                    <a target="_blank" href="img/article/<?php echo $customer['titre_image'];?>.jpg">
                        <img src="img/article/<?php echo $customer['titre_image'];?>.jpg" alt="Mountains" width="590" height="340">
                    </a>
                </div>

                <?php } ?> 

               <!--  <div class="gallerybig">
                    <a target="_blank" href="../img/screen01.jpg">
                        <img src="img/05.jpg" alt="Mountains" width="490" height="340">
                    </a>
                    <div class="desc">description</div>
                </div> -->
              
                    <div class="boutonarticle">
                        <button type="button" class="btn btn" style="background-color: #F0542C; color:white; border-radius:2em;"><a href="contact.php"><i class="fa fa-user"></i> Contactez-nous pour un devis personnalisé</a></button>
                    </div>

                    <div class="boutonarticle1">
                        <button type="button" class="btn btn-secondary"><a href="actualite_article.php"><i class="fa fa-arrow-left"></i> Article Précédent</a></button>
                    </div>

                    <div class="boutonarticle2">
                        <button type="button" class="btn btn-secondary"><a href="actualite_article.php"><i class="fa fa-arrow-right"></i> Article Suivant</a></button>
                    </div>
              
        </div>
</div>