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
    <section class="p-5 lead">
        <div class="container">
            Here review will appear
        </div>
    </section>
    <!-- Reviews ends here -->


    <?php
    include_once('./include/footer.php');
    ?>
</body>

</html>