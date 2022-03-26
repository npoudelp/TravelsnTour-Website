<?php
if (isset($_REQUEST['q'])) {
    session_start();
    if ($_SESSION['logged'] == 'true') {
        session_destroy();
        header('location:../index.php');
    }
} else {
    header('../pages/login.php');
}
    header('../index.php');
