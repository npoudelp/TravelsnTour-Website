<?php

session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
}
include_once("../include/dbConn.php");
$sql = "SELECT * FROM review;";
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
    <script src="../js/jQuery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- Navbar starts here -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="./adminReview.php" class="navbar-brand"><span class="text-light h2">Ashok Tour <span class="text-warning h1 logo">'n'</span> Travels</span></a>
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
                                <a href="./adminReview.php" class="nav-link active">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="./adminMessage.php" class="nav-link ">Messages</a>
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

    <!-- review section starts here -->
    <section class="lead py-3">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 py-1 shadow">
                    <?php
                    if (mysqli_num_rows($result)) {
                        while ($row = mysqli_fetch_assoc($result)) {



                    ?>
                            <div class="row">
                                <div class="col-3">
                                    <img src="../images/<?php echo $row['image']; ?>" class="rounded-circle" height="80px" width="80px">
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

                                            <div class="row">
                                                <div class="col-6">
                                                    <?php
                                                    if ($row['status'] == 0) {
                                                    ?>
                                                        <a href="../include/editStatus.php?rid=<?php echo $row['rid'] ?>&s=0" class="btn btn-danger">Pending</a>
                                                    <?php

                                                    }
                                                    if ($row['status'] == 1) {
                                                    ?>
                                                        <a href="../include/editStatus.php?rid=<?php echo  $row['rid'] ?>&s=1" class="btn btn-primary">Verified</a>

                                                    <?php
                                                    }

                                                    ?>
                                                </div>

                                                <div class="col-6">
                                                    <a href="../include/deleteReview.php?rid=<?php echo $row['rid'] ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
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
    <!-- review section ends here -->

    <?php
    include_once('../include/footer.php');
    ?>

    <script>
        deleteMess = (messId) => {
            $warn = "Do you really want to delete the message?";
            if (confirm($warn) == true) {
                window.location.href = "../include/deleteMessage.php?q=" + messId;
            }
        }

        checkMess = (messId) => {
            $warn = "Did you read the message?";
            if (confirm($warn) == true) {
                window.location.href = "../include/updateMessage.php?q=" + messId;
            }
        }
    </script>
</body>

</html>