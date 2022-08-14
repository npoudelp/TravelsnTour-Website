<?php
session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
}
if (isset($_REQUEST['q'])) {
    $packId = $_REQUEST['q'];
    $image = $_REQUEST['r'];
    echo $image;
    include_once("./dbConn.php");

    $sqlImage = "SELECT image FROM package WHERE pid = '{$packId}';";
    $getImage = mysqli_query($conn, $sqlImage);
    if (mysqli_num_rows($getImage) > 0) {
        while ($row = mysqli_fetch_assoc($getImage)) {
            $image = $row['image'];
            if (unlink($image)) {
                $sql = "DELETE FROM package WHERE pid = '{$packId}';";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header("location: ../pages/adminPackage.php?msg=success");
                }
            }else{
                header("location: ../pages/adminPackage.php?msg=failed");
            }
        }
    }
} else {
    header("location:../index.php");
}
