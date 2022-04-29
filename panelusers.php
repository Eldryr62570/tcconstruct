<?php
session_start();
 
include 'db/classeusers.php';
$customerObj = new Users();

if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);
}


 if ($_SESSION['membres']['role'] == 2) {
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  
    
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
                        <h3>Administration des utilisateurs</h3>
                        <p><a href="index.php">Admin</a> / Panel - Utilisateurs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="crudfront">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h2>Table données <b>Utilisateurs</b></h2>
                  </div>
                    <div  class="success" name="msgsucces"></div>
                  <div class="col-sm-6">
                  <li class="ins"><a class="btn btn-black " href="homeadmin.php"> <i class="fa fa-sign-out"></i> Accueil</a> 
                  <a href="addusers.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Ajouter utilisateur</span></a>
                
                  </div>
                </div>
              </div>

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

			<table class="table table-striped table-hover" id="mytable">
			<thead>
      <!-- attribut des tables header du tableaux -->			
      <tr>
        <th>Id Utilisateur</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Mot de passe</th>
        <th>Rôle</th>
        <th>Action</th>
      </tr>
    </thead>
        <tbody>
          <?php 
            $customers = $customerObj->displayData(); 
            foreach ($customers as $customer) {
          ?>
          <tr>
            <td><?php echo $customer['id_users'] ?></td>
            <td><?php echo $customer['nom'] ?></td>
            <td><?php echo $customer['prenom'] ?></td>
            <td><?php echo $customer['mail'] ?></td>
            <td>						
            <a href="#" class="btn btn-primary mr-2 text-white"><i class="material-icons">&#xE147;</i> <span>Changer Mot de passe</span></a>
            </td>
            <td><?php echo $customer['nom_role'] ?></td>
            <td>
              <button class="btn btn-primary mr-2"><a href="editusers.php?editId=<?php echo $customer['id_users'] ?>">
                <i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
              <button class="btn btn-danger"><a href="panelusers.php?deleteId=<?php echo $customer['id_users'] ?>" onclick="confirm('Voulez vous vraiment supprimer cette demande')">
                <i class="fa fa-trash text-white" aria-hidden="true"></i>
              </a></button>
            </td>
            <?php } ?>
          </tr>
        
          </tbody>
			</table>
			
		  </div>
    </div>        
  </div>
</div>





<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Supprimer Utilisateurs</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>êtes vous sûre de vouloir supprimer l'utilisateur?</p>
					<p class="text-warning"><small>Cette Action supprimera l'utilisateur</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
				  <input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

    <?php include('newchoose.php'); ?>
    <!-- chose_us_area end -->

    <?php include('testimonial.php'); ?>




    <!-- contact_us_start  -->
    <?php include('footer.php'); ?>



 <!-- JS here -->
    
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

    <script rel="stylesheet" src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
        $('table').DataTable();
        } );
    </script>




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

<?php }else header('location:index.php');   ?> 




