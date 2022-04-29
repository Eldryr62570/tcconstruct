<?php 
session_start();

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
</head>

<body>
    


<?php include("header.php"); ?>

<!-- panel home admin -->


<div class="bradcam_area bradcam_bg_2 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Accueil Administration</h3>
                        <p><a href="index.php">Admin</a> / Accueil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">

             <div class="table-title">
               
                  <div class="col-sm-6">
                    <h3 class="textadmin">Panels <b>Administration</b></h3>
                  </div>
                    <div  class="success" name="msgsucces"></div>
            </div>
              
            <div class="gallerybig">
              <!-- get id panel -->
                    <a href="panelusers.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="desc">Voir Panel Users</div>
                    </a>        
            </div>

            <div class="gallerybig">
                    <a href="panelarticle.php">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                    <div class="desc">Voir Panel Articles</div>
                    </a>        
            </div>

            <div class="gallerybig">
                    <a href="panelimages.php">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                    <div class="desc">Voir Panel Images</div>
                    </a>            
            </div>
            <div class="gallerybig">
                    <a href="paneltags.php">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                    <div class="desc">Voir Panel Tags</div>
                    </a>          
            </div>
            <div class="gallerybig">
                    <a href="panelcategorie.php">
                    <i class="fa fa-folder" aria-hidden="true"></i>
                    <div class="desc">Voir Panel Catégories</div>
                    </a>           
            </div>

</div>


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

