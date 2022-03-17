<?php

require 'db/auth.php';
forcer_utilisateur_connecte();
$session = $_SESSION['membres'];

?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mon compte</title>
    <meta name="description" content="TC Construction, située dans la marne est spécialisée dans les travaux de maçonnerie générale, rénovation immobilière, terrassement, construction, nettoyage de façade, enrobés, élévation de mur, dallage, pavage et tous travaux de maçonnerie à Reims, Epernay et Chalons en Champagne. Expert en rénovation immobilière, nos maçons prennent en charge les travaux de façade, enduit, béton armé, création d'ouverture, pose de menuiserie et isolation. Maçonnerie Reims. Rénovation maison Marne. Maçons 51. Maçonnerie Marne. Nettoyage façade 51. Terrassement Reims. Dallage pavage Marne. Maçonnerie 51. Construction batiment. Entreprise travaux publics 51.Rénovation de l'habitat Reims. Rénovation de l'habitat 51. Maçons Reims. Maçons Marne.">
    <meta name="keywords" content="maçon reims, maçon mourmelon le grand, TC Construction, tc construction reims, tc construction 51, tc construction mourmelon le grand, Maçons, Maçons Reims, Maçons La Neuvilette, Maçons Marne, Maçons 51, Maçons Champagne-Ardenne, Maçonnerie, Maçonnerie Reims, Maçonnerie La Neuvilette, Maçonnerie Marne, Maçonnerie 51, Maçonnerie Champagne-Ardenne, Maçonnerie générale, Maçonnerie générale Reims, Maçonnerie générale La Neuvilette, Maçonnerie générale Marne, Maçonnerie générale 51, Maçonnerie générale Champagne-Ardenne, Béton armé, Béton armé Reims, Béton armé La Neuvilette, Béton armé Marne, Béton armé 51, Béton armé Champagne-Ardenne, Construction, Construction Reims, Construction La Neuvilette, Construction Marne, Construction 51, Construction Champagne-Ardenne, Rénovation, Rénovation Reims, Rénovation La Neuvilette, Rénovation Marne, Rénovation 51, Rénovation Champagne-Ardenne, Extension, Extension Reims, Extension La Neuvilette, Extension Marne, Extension 51, Extension Champagne-Ardenne, Transformation bâtiment, Transformation bâtiment Reims, Transformation bâtiment La Neuvilette, Transformation bâtiment Marne, Transformation bâtiment 51, Transformation bâtiment Champagne-Ardenne, Mise à conformité bâtiment, Mise à conformité bâtiment Reims, Mise à conformité bâtiment La Neuvilette, Mise à conformité bâtiment Marne, Mise à conformité 51, Mise à conformité bâtiment Champagne-Ardenne, Rénovation immobilière, Rénovation immobilière Reims, Rénovation immobilière La Neuvilette, Rénovation immobilière Marne, Rénovation immobilière 51, Rénovation immobilière Champagne-Ardenne, Ravalement de façade, Ravalement de façade Reims, Ravalement de façade La Neuvilette, Ravalement de façade Marne, Ravalement de façade 51, Ravalement de façade Champagne-Ardenne, Travaux publics, Travaux publics Reims, Travaux publics La Neuvilette, Travaux publics Marne, Travaux publics 51, Travaux publics Champagne-Ardenne, Aménagements extérieurs, Aménagements extérieurs Reims, Aménagements extérieurs La Neuvilette, Aménagements extérieurs Marne, Aménagements extérieurs 51, Aménagements extérieurs Champagne-Ardenne, Maçonnerie paysagère, Maçonnerie paysagère Reims, Maçonnerie paysagère La Neuvilette, Maçonnerie paysagère Marne, Maçonnerie paysagère 51, Maçonnerie paysagère Champagne-Ardenne, Pavage, Pavage Reims, Pavage La Neuvilette, Pavage Marne, Pavage 51, Pavage Champagne-Ardenne, Dallage, Dallage Reims, Dallage La Neuvilette, Dallage Marne, Dallage 51, Dallage Champagne-Ardenne">
    <meta name="subject" content=" La société TC construction, situé à auberive dans la marne, est spécialicé dans les travaux de maçonnerie générale, rénovation immobilière, terrassement, construction.">
    <meta name="language" content="FR">
    <meta name="author" content="Maitrise WEB">
    <meta name="robots" content="index,follow,all">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

     <!-- header-start -->
      <?php include("header.php"); ?>
        <!-- header-end -->
        <!-- bradcam_area  -->
        <div class="bradcam_area bradcam_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Mon compte</h3>
                            <p><a href="index.php">Accueil</a> / Mon compte</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->
        <div class="profil">
            <h4>Mon profil</h4>

            <div class="separator"></div>

            <div class="base">
                <div class="base_profil">
                    <p>Photo de profil :</p>
                    <p>Nom :</p>
                    <p>Prénom :</p>
                    <p>Email :</p>
                    <p>Téléphone :</p>
                    <p>Adresse :</p>
                    <p>Code postal :</p>
                    <p>Ville :</p>
                </div>
            
                <div class="session">
                    <p><?php echo $session['nom']; ?></p>
                    <p><?php echo $session['prenom']; ?></p>
                    <p><?php echo $session['mail']; ?></p>
                    <p><?php echo $session['phone']; ?></p>
                    <p><?php echo $session['adresse']; ?></p>
                    <p><?php echo $session['code_postal']; ?></p>
                    <p><?php echo $session['ville']; ?></p>
                </div>
            </div>
        </div>

        <div>
            <a href="db/deco.php">deco</a>
        </div>
    <!-- footer_start  -->
    <!-- chose_us_area start -->
    <?php include('newchoose.php'); ?>
    <!-- chose_us_area end -->

    <?php include('testimonial.php'); ?>

    <!-- contact_us_start  -->
    <?php include('footer.php'); ?>

        <!-- footer_end  -->
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
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }

            });
        </script>
    </body>

    </html>
