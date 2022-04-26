<?php
/* session_start();
require_once('db/connectdb.php');



/* if ($_SESSION['role'] == 2) { */

    include 'db/classearticle.php';
    $customerObj = new Articles();
  
    if(isset($_POST['submit'])) {
      $customerObj->insertData($_POST);
    }
    
    

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/crudadmin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script rel="stylesheet" src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js"></script>


  
    
    <title>Panel - Admin</title>
</head>
    
<body>
    
<?php include("header.php"); ?>

<!-- panel home admin -->

<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Administration des Articles</h3>
                        <p><a href="index.php">Admin</a> / Panel - Articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- panel admin -->

<div class="container-xl">
	<div class="table-responsive">
                <?php
                    if (isset($_GET['msg1']) == "insert") {
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>×</button>
                            Votre Registration est ajoutée
                            </div>";
                    } 
                    if (isset($_GET['msg2']) == "update") {
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>×</button>
                            Votre registration est modifier ! 
                            </div>";
                    }
                    if (isset($_GET['msg3']) == "delete") {
                    echo "<div class='alert alert-success alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>×</button>
                            Votre demande est suprimée ! 
                            </div>";
                    }
                ?>
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Panel <b>Articles</b></h2>
					</div>
                    <div  class="success" name="msgsucces"></div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Article</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover" id="mytable">
				<thead>
                    <!-- attribut des tables header du tableaux -->
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Action</th>
                        <th>Statut</th>
                        <th>ID Article</th>
						<th>Titre article</th>
						<th>Image Article</th>
                        <th>Contenu Article</th>
						<th>Date article</th>
						<th>Nom catégorie</th>
                        <th>Tags</th>
                        <th>Images</th>
					</tr>
				</thead>
				<tbody>
                
                
                <!-- données des table  -->

                
                <?php 
                require "db/affiche_crudarticle.php";
                if (!$resultatcrudarticles) {
                echo "Problème de requete";
                } else {
                ?>
                <tr>
                <?php while($ligne = $resultatcrudarticles->fetch()) {
                                 ?>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            <a href="#readEmployeeModal" class="read" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Read">visibility</i></a>
						</td>  
                        <td>
                        <a href="#editStatutModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">autorenew
                        </i></a>
                        </td>
						<td><?php echo $ligne['id_article']; ?></td>
						<td><?php echo $ligne['titre_article']; ?></td>
						<td><?php echo $ligne['imgp_article']; ?></td>
						<td><?php $ligne['contenu_article']=substr($ligne['contenu_article'],0,100); echo $ligne['contenu_article']; ?></td>
                        <td><?php echo $ligne['date_article']; ?></td>
                        <td><?php echo $ligne['nom_categorie']; ?></td>
                        <td><?php echo $ligne['nom_tag']; ?></td>
                        <td><?php echo $ligne['titre_image']; ?></td>
                        <!-- // fin du while  -->
					</tr>
                    <?php } ?>
              <?php }  ?> <!-- fin du else -->
               
					
						 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Affichage <b>5</b> sur <b>25</b> pages</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->

<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter un article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                <div class="erreur" name="msgnotif"></div>
                    
				<div class="modal-body">					
                        <div class="form-group">
                            <label>Titre Article</label>
                            <input type="text" class="form-control" name="titrearticle" required>
                        </div>
                        <div class="form-group">
                            <label>Image Article</label><br>
                            <input name="imagearticle" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Contenu Article</label>
                            <input type="text" class="form-control" name="contenuarticle" required>
                        </div>
                        
                        <!-- table categorie à joindre en select -->
                        <div class="form-group">
                            <label> Choisir catégorie</label>
                            <?php 
                            require "db/affiche_crudarticle.php";
                            ?>
                
                
                                <select name="categoriearticle" id="categoriearticle">
                                
                                    <option value="">Catégorie  </option>
                                    <?php while($ligne = $resultatcrudarticles->fetch()) {
                                    ?>
                                    <option value="categorie"><?php echo $ligne['nom_categorie']; ?></option>
                                    <?php } ?>
                                </select>
                                 

                        </div>	
                       
                        
                        <!-- table tags à joindre en select -->
                        <div class="form-group">
                        <label> Choisir Tags</label>
                            <?php 
                            require "db/affiche_crudarticle.php";
                            ?>
                
                
                                <select name="pets" id="pet-select">
                                
                                    <option value="">Tags  </option>
                                    <?php while($ligne = $resultatcrudarticles->fetch()) {
                                    ?>
                                    <option value="categorie"><?php echo $ligne['nom_tag']; ?></option>
                                    <?php } ?>
                                </select>
                        </div>


                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add" name="submit">
                        </div>
                 </div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editer Article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                <div class="modal-body">	
                            <div class="form-group">
                                <label>Titre Article</label>
                                <input type="text" class="form-control" name="nom_us" required>
                            </div>
                            <div class="form-group">
                                <label>Image Article</label>
                                <input type="text" class="form-control" name="prenom_us" required>
                            </div>
                            <div class="form-group">
                                <label>Contenu Article</label>
                                <input type="text" class="form-control" name="mail_us" required>
                            </div>
                            <div class="form-group">
                                <label>Date de l'article</label>
                                <input type="date" class="form-control" name="mdp_us" required>
                            </div>
                            <div class="form-group">
                                <label>Nom catégorie</label>
                                <input type="text" class="form-control" name="mdpconf_us" required>
                            </div>					
                            <div class="form-group">
                                    <label>Tags</label>
                                    <input type="text" class="form-control" name="adresse_us" required>
                            </div>
                            <div class="form-group">
                                <label>Les images</label>
                                <input type="text" class="form-control" name="photo_us" required>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Add" name="adduser">
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info" value="Save">
                            </div>
                </div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>êtes vous sûre de vouloir supprimer ?</p>
					<p class="text-warning"><small>Cette Action supprimera</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>


<div id="editStatutModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Publier l'article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment publier l'article ?</p>
					<p class="text-warning"><small>Cette Action publira votre article</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Validate">
				</div>
			</form>
		</div>
	</div>
</div>

<div id="readEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Voir l'article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Voulez vous vraiment voir l'article ?</p>
					<p class="text-warning"><small>Cette Action vous redigera sur la page article</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Validate">
				</div>
			</form>
		</div>
	</div>
</div>

    <!-- contact_us_start  -->
    <?php include('footer.php'); ?>



 <!-- JS here -->
    <script type="text/javascript">
        $(document).ready( function () {
        $('#mytable').DataTable();
        } );
    </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>



  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="search" >
                <button type="submit">search</button>
            </div>
          </div>
        </div>
      </div>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>

  

    </body>
</html>

