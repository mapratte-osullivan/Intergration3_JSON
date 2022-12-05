<!DOCTYPE html>
<html lang="fr">

<?php

include "nav.php";
include "footer.php";
include "function.php";


/** Gestion des pages */
if ((isset($_REQUEST['page'])) && (!empty($_REQUEST['page']))) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$apiKey = "dfbc345af7154fcc8a8728a850f0138d";
/*$url = "https://newsapi.org/v2/everything?q=" . $q . "&apiKey=" .  $apiKey . "&language=fr&page=". $page;*/

$url = "http://newsapi.org/v2/everything?q=art%20visuel&apiKey=$apiKey&language=fr&page=$page";


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
    <link rel="stylesheet" href="assets/vendors/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets\css\style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->

            <?php

            echo $nav

            ?>

            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="position-relative">



                                <?php
                                for ($index = 0; $index < 1; $index++) {
                                    $article = $json['articles'][$index];
                                ?>

                                    <img src="<?php img($article) ?>" alt="banner" class="img-fluid" />
                                    <div class="banner-content">
                                        <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                            global news
                                        </div>
                                        <h1 class="mb-0"><?php title($article) ?></h1>
                                        <h1 class="mb-2">
                                            Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                                            Postponed, 168 Trains
                                        </h1>
                                    </div>
                            </div>


                        <?php } ?>


                        </div>
                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h2>Dernière nouvelles</h2>


                                    <?php
                                    for ($index = 1; $index < 4; $index++) {
                                        $article = $json['articles'][$index];

                                        
                                    ?>

                                        <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                            <div class="pr-3">
                                                <h5><?php title($article) ?></h5>

                                            </div>
                                            <div class="rotate-img">
                                                <img src="<?php img($article) ?>" alt="thumb" class="img-fluid img-lg" />
                                            </div>
                                        </div>

                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-3 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Catégorie</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="art_visuel.php?q=art%20visuel">Art visuel</a></li>
                                        <li><a href="art_visuel.php?q=art%20moderne">Art moderne</a></li>
                                        <li><a href="art_visuel.php?q=musique%20romantique">Musique romantique</a></li>
                                        <li><a href="art_visuel.php">Sculpture</a></li>
                                        <li><a href="art_visuel.php?q=littérature">Littérature</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">


                                    <?php
                                    for ($index = 5; $index < 8; $index++) {
                                        $article = $json['articles'][$index];

                                       
                                    ?>

                                        <div class="row">
                                            <div class="col-sm-4 grid-margin">
                                                <div class="position-relative">
                                                    <div class="rotate-img">
                                                        <img src="<?php img($article) ?>" alt="thumb" class="img-fluid" />
                                                    </div>
                                                    <div class="badge-positioned">
                                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8  grid-margin">
                                                <h2 class="mb-2 font-weight-600">

                                                    <?php title($article) ?>

                                                </h2>

                                                <p class="mb-0">
                                                    <?php des($article) ?>
                                                </p>
                                            </div>
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