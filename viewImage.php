<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Bogura Retina-Medical and Dental Admission Coaching</title>
    <link rel="shortcut icon" href="assets/images/icon.png" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h2 style="color:black;">Image Upload</h2>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Add Image</a></li>
                            <li><a href="viewImage.php" class="active">Image View</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    <div class="categories-collections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="row">



                            <div>
                                <h6 style="margin-top: 2%;"><b>Image List</b></h6>
                                <table class="tableCourse">
                                    <tr>
                                        <th>ID</th>
                                        <th>Image Path</th>
                                        <th>Image</th>
                                    </tr>
                                    <?php
                                    // Include the database configuration file
                                    include_once 'dbconfig.php';

                                    // Get images from the database
                                    $query = $db->query("SELECT * FROM gallery ORDER BY id ASC");

                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {

                                            $imageURL = 'uploads/' . $row["gallery_image"];
                                    ?>


                                            <tr>
                                                <td><?php echo $row["id"]; ?></td>
                                                <td><?php echo "http://localhost/testimg/" . $imageURL; ?></td>
                                                <td><img style="width: 150px; hight: 150px;" src="<?php echo $imageURL; ?>" alt="" /></td>
                                            </tr>







                                        <?php }
                                    } else { ?>
                                        <p>No image(s) found...</p>
                                    <?php } ?>



                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>