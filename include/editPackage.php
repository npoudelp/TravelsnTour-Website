<?php
if (isset($_POST['submit'])) {
    include_once('./dbConn.php');

    $location = $_POST['location'];
    $details = $_POST['details'];
    $pid = $_POST['pid'];

    $sql = "UPDATE package SET location='$location', details='$details' WHERE pid='$pid';";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location: ../pages/adminPackage.php?msg=success');
    } else {
        header('location: ../pages/adminPackage.php?msg=success');
    }
}
