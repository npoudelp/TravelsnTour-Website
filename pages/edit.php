<?php
session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
}
$pid = "";
$msg = "";
$location = "";
$details = "";
$image = "";
if (isset($_REQUEST['pid'])) {
    $pid = $_REQUEST['pid'];
}
include_once("../include/dbConn.php");
$sql = "SELECT * FROM package WHERE pid='$pid';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $location = $row['location'];
        $details = $row['details'];
        $image = $row['image'];
    }
} else {
    $error =  '<span class="lead text-danger">Error to det desired package, please re login and try again</span>';
}
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
    <script src="../js/jQuery.js"></script>

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
                                <a href="./adminPackage.php" class="nav-link active">Tour Packages</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Taxi Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="./adminMessage.php" class="nav-link">Messages</a>
                            </li>
                            <li class="nav-item mx-lg-5">
                                <a href="./addPackage.php" class="btn btn-outline-danger nav-link">Add Package</a>
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
    <?php
    echo $error;
    ?>
    <br>
    <div class="container">
        <form method="POST" action="../include/editPackage.php">
            <input type="hidden" name="pid" value="<?php echo $pid; ?>">

            <?php

            echo '<div class="col-lg-4 col-md-6">
<div class="card mb-4 shadow rounded">
    <img class="card-img-top" height="250px" width="100%" src="' . $image . '">
    <div class="card-body text-center">
    <input type="text" class="form-control" name="location" value=' . $location . ' id="name" placeholder="Location"><br>
    <input type="text" class="form-control" name="details" value=' . $details . ' id="name" placeholder="Details">

    </div>
</div>
</div>';


            ?>
            <button type="submit" name="submit" class="btn btn-outline-danger">Edit</button>
        </form>
    </div>

    <!-- package display starts here -->

    <section id="packages">
        <div class="album py-3">
            <div class="container ">
                <div class="row">

                </div>
            </div>
        </div>

        <!-- package display ends here -->
        <?php
        include_once('../include/footer.php');
        ?>
</body>

</html>