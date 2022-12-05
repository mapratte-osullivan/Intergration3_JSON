<!DOCTYPE html>
<html lang="fr">


<?php

include "nav.php";
include "footer.php"

?>


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Time</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../partials/_navbar.html -->


        <?php

        echo $nav

        ?>

        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="aboutus-wrapper">
                                    <h1 class="mt-5 text-center mb-5">
                                        Contactez-nous
                                    </h1>
                                    <div class="row">
                                        <div class="col-lg-12 mb-5 mb-sm-2">
                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control textarea" placeholder="Commentaire *" id="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nom *" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email *" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">Envoyer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller ends -->


    <?php

    echo $footer

    ?>


    <!-- partial -->
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
</body>

</html>