<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="../js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Navbar starts here -->
    <div class="nav navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="../index.php" class="navbar-brand"><span class="text-light h2">Ashok Tour <span class="text-warning h1 logo">'n'</span> Travels</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlink">
                <i class="bi bi-grid-3x3-gap"></i>
            </button>
            <div class="container collapse navbar-collapse justify-content-center" id="navlink">
                <div class="d-lg-flex">
                    <div class="container">
                        <ul class="navbar-nav lead">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">Tour Package</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Taxi Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar ends here -->

    <!-- Login form starts here -->
    <section class="p-3 text-center">
        <div class="container p-3">
            <div class="text-center container p-3 lead">
                <form class="form-signin shadow-lg p-5 rounded" method="post" action="../include/loginCheck.php">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" id="email" class="form-control mb-3" name="email" placeholder="@email address" required autofocus><br>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Password" minlength="4" required><br>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="checkbox" value="set"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-outline-warning btn-block" type="submit" name="submit">Sign in</button><br>
                </form>
            </div>
        </div>
    </section>
    <!-- Login form ends here -->

    <!-- Footer starts here -->
    <?php include_once("../include/footer.php"); ?>
</body>

</html>