<?php
session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
} ?>
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


    <!-- Tour package example -->
    <section id="packages">
        <div class="album py-3">
            <div class="container">
                <div class="row border border-red">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4 shadow rounded">
                            <img class="card-img-top" src="../images/testImg.jpg">
                            <div class="card-body text-center">
                                <p class="h5">Chandigarh-Shimla-Kufri</p>
                                <p class="card-text">4 Days Starting From ₹12000 4 Days - Etios/Dzire ₹12000 | Innova ₹16000 | Crysta ₹18000 | Tempo Traveller ₹20000 </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" onclick="alert('This will allow user to book the package.')" class="btn btn btn-outline-danger">Book Now</a>
                                        <a href="#" onclick="alert('This will allow user to see details of package.')" class="btn btn btn-outline-dark">Details</a>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="h3 lead text-danger">This is how package will be formated after it is published!!</span>
            </div>
        </div>
    </section>
    <!-- Tour package ends here -->

    
    <!-- Package form starts here -->
    <section class="p-3 lead">
        <div class="container shadow p-3 rounded text-center">
            <form method="POST" action="../include/package.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Image</label>
                    <input type="file" class="form-control" required name="file" id="file" >
                </div><br>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" required name="location" id="location" placeholder="Location for package">
                </div><br>
                <div class="form-group">
                    <label for="message">Details</label>
                    <textarea type="text" class="form-control" required name="details" id="details" placeholder="Detail pricing and description for package"></textarea>
                </div><br>

                <button type="submit" name="submit" class="btn btn-outline-warning">Submit</button>
            </form>
        </div>
    </section>
    <!-- Package form ends here -->


    <?php
    include_once('../include/footer.php');
    ?>
</body>

</html>