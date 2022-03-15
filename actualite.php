<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
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
</head>

<body>
    <?php require("header.php");?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Nos Actualités</h3>
                        <p><a href="index.php">Accueil</a> / Nos Actualités</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Actualite affichage -->
    <div class="container-fluid  height_actu">
        <div class="row justify-content-center mx-0">
            <div class="col-md-5 px-5 mt-5 flex-row d-flex justify-content-center">
                <!-- Cards actu -->
                <div class="card">
                    <div class="card-body">
                        <img src="https://picsum.photos/1000/500" class="img-fluid rounded" alt="Image title">
                        <h5 class="card-title">Bâtiment de stockage de grain</h5>
                        <ul class="post-meta list-inline pb-2">
                            <li class="list-inline-item">
                                <i class="fa fa-user-circle-o"></i> <a href="#">John Doe</a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-calendar-o"></i> <a href="#">25 June 2020</a>
                            </li>
                        </ul>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti qui
                            cupiditate officiis, reprehenderit pariatur enim, necessitatibus sit harum provident, earum
                            eius doloremque modi vero ratione sapiente. Voluptates, id vero quam repellendus incidunt
                            enim commodi magnam omnis, adipisci minima a quisquam quaerat modi. Distinctio cumque
                            eveniet harum quaerat, in aliquam eaque!</p>
                        <ul class="post-meta list-inline pt-3">
                            <li class="list-inline-item">
                                <i class="fa fa-tags"></i> <a href="#">Tags</a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-tags"></i> <a href="#">Tags</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100 d-md-none"></div>
           


        </div>



        <div class="mt-5"></div>
        <!-- footer_start  -->
        <!-- chose_us_area start -->
        <?php include('newchoose.php'); ?>
        <!-- chose_us_area end -->

        <?php include('testimonial.php'); ?>

        <!-- contact_us_start  -->
        <?php include('footer.php'); ?>
        <!-- footer_end  -->
        <!-- Modal -->
        <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="serch_form">
                        <input type="text" placeholder="search">
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