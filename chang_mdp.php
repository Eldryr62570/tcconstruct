<?php
    require("db/readArticle.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rénitialiser - mdp</title>
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
    <link rel="stylesheet" href="css/actualite.css">
    <link rel="stylesheet" href="css/styleconnexion.css">
    <script src="https://kit.fontawesome.com/eaf2c4b5d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="slick.css">
</head>

<body>
    <?php require("header.php");?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Changer votre mot de passe</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="formulaire-connexion mb-5">
        <div class="connexion-bg">
            <h2>Changement de mot de passe</h2>
        </div>

        <form method="post" action="db/traitement_changement_mdp.php">
            Nouveau mot de passe: <input type="password" name="mdp" />
            <br />
            Confirmer mot de passe: <input type="password" name="confirm_mdp" />
            <br />
            <input type="submit" name="Sauvegarder" value="enregistrer" class="boutton-connexion" />
            <?php if(isset($_GET["sucess"] )){?>
            <div class="text-success text-center">
                Votre mot de passe à bien était changer.
                <br/>
                Veuillez vous connectez.
            </div>
            <?php }?>
        </form>
    </div>

    <!--/ bradcam_area  -->
            <!-- chose_us_area start -->
            <?php include('newchoose.php'); ?>
        <!-- chose_us_area end -->

        <?php include('testimonial.php'); ?>

        <!-- contact_us_start  -->
        <?php include('footer.php'); ?>
        <!-- footer_end  -->
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