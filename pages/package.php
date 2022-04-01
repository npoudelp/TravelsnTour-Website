<?php
include_once("../include/dbConn.php");
$sql = "SELECT * FROM package ORDER BY packageId DESC;";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashok Tour 'n' Travels</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- Navbar starts here -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="../index.php" class="navbar-brand"><span class="text-light h2">Ashok Tour <span class="text-warning h1 logo">'n'</span> Travels</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="nav">
                <div class="d-lg-flex">
                    <div class="container">
                        <ul class="navbar-nav lead">
                            <li class="nav-item">
                                <a href="./package.php" class="nav-link active">Tour Package</a>
                            </li>
                            <li class="nav-item">
                                <a href="./taxi.php" class="nav-link">Taxi Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="./about.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="./contact.php" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item mx-lg-5">
                                <a href="../pages/login.php" class="btn btn-outline-warning nav-link">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar ends here -->



    <!-- package display starts here -->

    <section id="packages">
        <div class="album py-3">
            <div class="container ">
                <div class="row">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-lg-4 col-md-6">
                                    <div class="card mb-4 shadow rounded">
                                        <img class="card-img-top" height="250px" width="100%" src="' . $row["image"] . '">
                                        <div class="card-body text-center">
                                            <p class="h5">' . $row["location"] . '</p>
                                            <p class="card-text">' . $row["details"] . '</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="tel:+919815374668" class="btn btn btn-outline-warning">Book Now</a>
                                                    <a href="#" class="btn btn btn-outline-dark">Details</a>
                                                </div>
                                                <small class="text-muted"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }
                    }
                    ?>
                </div>
            </div> 
        </div>
        <!-- package display ends here -->


        <?php
        include_once('../include/footer.php');
        ?>
</body>

</html>