<!DOCTYPE html>
<html lang="fr">


<?php

include "nav.php";
include "footer.php";
include "function.php";


$q = $_GET['q'];

/** Gestion des pages */
if ((isset($_REQUEST['page'])) && (!empty($_REQUEST['page']))) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$apiKey = "dfbc345af7154fcc8a8728a850f0138d";
/*$url = "https://newsapi.org/v2/everything?q=" . $q . "&apiKey=" .  $apiKey . "&language=fr&page=". $page;*/

$url = "http://newsapi.org/v2/everything?q=$q&apiKey=$apiKey&language=fr&page=$page";

$str = loadJson($url);

//$str = file_get_contents($q . '.json');
$json = json_decode($str, true);


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
        <div class="main-panel">
            <!-- partial:../partials/_navbar.html -->

            <?php

            echo $nav;

            ?>

            <div class="content-wrapper">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="font-weight-600 mb-4">
                                            <?php echo $q ?>
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">

                                        <?php
                                        for ($index = 6; $index < 12; $index++) {
                                            $article = $json['articles'][$index];
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-4 grid-margin">
                                                    <div class="rotate-img">
                                                        <img src="<?php img($article) ?>" alt="banner" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <h2 class="font-weight-600 mb-2">
                                                        <?php title($article) ?>
                                                    </h2>

                                                    <?php des($article) ?>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                    <div class="col-lg-4">
                                        <h2 class="mb-4 text-primary font-weight-600">
                                            Dernière nouvelles </h2>

                                        <?php
                                        for ($index = 0; $index < 3; $index++) {
                                            $article = $json['articles'][$index];
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="border-bottom pb-4 pt-4">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <h5 class="font-weight-600 mb-1">
                                                                    <?php title($article) ?>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="rotate-img">
                                                                    <img src="<?php img($article) ?>" alt="banner" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>




                                        <div class="trending">
                                            <h2 class="mb-4 text-primary font-weight-600">
                                                Trending
                                            </h2>

                                            <?php
                                            for ($index = 3; $index < 6; $index++) {
                                                $article = $json['articles'][$index];
                                            ?>

                                                <div class="mb-4">
                                                    <div class="rotate-img">
                                                        <img src="<?php img($article) ?>" alt="banner" class="img-fluid" />
                                                    </div>
                                                    <h3 class="mt-3 font-weight-600">
                                                        <?php title($article) ?>
                                                    </h3>

                                                </div>

                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:../partials/_footer.html -->


            <?php

            echo $footer

            ?>

            <!-- partial -->
        </div>
    </div>
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