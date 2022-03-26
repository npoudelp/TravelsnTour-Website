<?php
session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
}
include_once("../include/dbConn.php");
$sql = "SELECT * FROM message ORDER BY messageId DESC;";
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
                                <a href="./adminPackage.php" class="nav-link ">Tour Packages</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Taxi Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="./adminMessage.php" class="nav-link active">Messages</a>
                            </li>
                            <li class="nav-item mx-lg-5">
                                <a href="../include/logOut.php?q=logOut" class="btn btn-outline-warning nav-link">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar ends here -->

    <!-- Message section starts here -->
    <section class="lead p-5">
        <div class="container">
            <div class="row">
                <?php

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-lg-4 col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <div class="card-body">
                                <h5 class="card-title">' . $row["name"] . '</h5>
                                <h6 class="card-subtitle mb-2 text-muted border-bottom">' . $row["phone"] . '</h6>
                                <p class="card-text">' . $row["message"] . '</p>
                                ';

                                if($row["callBack"] == '1'){
                                    echo '<a href="tel:'.$row['phone'].'" class="btn btn-outline-warning"><i class="bi bi-telephone-fill"></i> &nbsp; Wants a call back</a>';
                                }

                        echo '</div>
                        </div>
                    </div>';
                    }
                }

                ?>

            </div>
    </section>
    <!-- message section ends here -->

    <?php
    include_once('../include/footer.php');
    ?>
</body>

</html>