<?php
$msg = "";
if (isset($_REQUEST['msg'])) {
    $msg = $_REQUEST['msg'];
}

include_once('./include/dbConn.php');
$sql = "SELECT * FROM review WHERE status=1;";

$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashok Tour 'n' Travels</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- Navbar starts here -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="./index.php" class="navbar-brand"><span class="text-light h2">Ashok Tour <span class="text-warning h1 logo">'n'</span> Travels</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="nav">
                <div class="d-lg-flex">
                    <div class="container">
                        <ul class="navbar-nav lead">
                            <li class="nav-item">
                                <a href="./pages/package.php" class="nav-link ">Tour Package</a>
                            </li>
                            <li class="nav-item">
                                <a href="./pages/taxi.php" class="nav-link">Taxi Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="./pages/about.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="./pages/contact.php" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item mx-lg-5">
                                <a href="./pages/login.php" class="btn btn-outline-warning nav-link">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar ends here -->

    <!-- Reviews starts here -->
    <section class="lead py-3">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 py-1 shadow">
                    <?php
                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {



                    ?>
                            <div class="row">
                                <div class="col-3">
                                    <img src="./images/<?php echo $row['image']; ?>" class="rounded-circle" height="80px" width="80px">
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <span class=""><i class="bi bi-quote text-muted"></i>
                                            <?php echo $row['review']; ?>
                                        </span>
                                        <div class="row">
                                            <p class="text-muted">-
                                                <?php echo $row['name']; ?>
                                                ,
                                                <?php echo $row['address']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <span class="text-danger lead">No reviews available</span>
                    <?php


                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews ends here -->


    <section class="bg-dark text-white lead">
        <div class="container-flex mx-5">
            <div class="row">
                <div class="col-lg p-3">
                    <i class="bi bi-geo-alt-fill h3 text-danger"></i> &nbsp; <span class="h3 text-light">Find Us</span>
                    <p class="border-top border-secondary py-1">
                        SCF 1, Kalka Shimla National Highway Road, Wadhawa Nagar Hotal NEO Classic Backside Dhakoli, Zirakpur, Chandigarh
                    </p><br>
                    <p><i class="bi bi-telephone-fill  text-warning"> </i>+91-9815374668</p>
                    <p><i class="bi bi-envelope-fill text-danger"></i>ashoktourntravels@gmail.com</p>
                </div>
                <div class="col-lg p-3 text-center">
                    <i class="bi bi-map text-success h3"></i> &nbsp; <span class="h3 text-light">Popular Destination</span>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">Shimla</a>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">Ladakh</a>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">Manali</a>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">Chandigarh</a>
                </div>
                <div class="col-lg p-3 text-center">
                    <i class="bi bi-link-45deg text-secondary h3"></i> &nbsp; <span class="h3 text-light">Quick Links</span>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">Home</a>
                    <!-- <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="./package.php">Tour Packages</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">One-Way Taxi</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="./about.php">About</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="./contact.html">Contact Us</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">gallery</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">review</a> -->
                </div>
                <div class="col-lg p-3 text-center">
                    <i class="bi bi-person-check h3"></i> &nbsp; <span class="h3 text-light">Follow Us</span>
                    <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="https://www.facebook.com/Ashok-Tour-Travels-105122087549206/"><i class="bi bi-facebook text-primary"></i> Facebook</a>
                    <p class="lead text-center py-1"><a href="./pages/giveReview.php" class="btn btn-outline-warning btn-small">Leave your review here </a> </p>
                    <!-- <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">instagram</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">twitter</a>
                <a class="nav-link text-white border-top px-3 py-1 border-secondary" href="#">linkedin</a> -->
                </div>
            </div>
        </div>
        <div class="container-flex mx-0 lead px-3 py-1">
            <p class="credit lead border-top border-warning px-5 py-1">
                Created by <a href="https://nirojpoudel.com.np" target="_blank" class="text-decoration-none text-warning">npoudelp</a> &nbsp; | &nbsp; All Rights Reserved &copy; <?php echo date('Y'); ?>
            </p>
        </div>
    </section>
</body>

</html>