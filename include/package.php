<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    $location = $_POST['location'];
    $details = $_POST['details'];
    $image = basename($_FILES['file']['name']);
    $imageTemp = $_FILES['file']['tmp_name'];
    $folder = '../images/' . $image;
    $active = $_POST['active'];
    $check = '0';
    if($active == '1'){
        $check = '1';
    }


    if (move_uploaded_file($imageTemp, $folder)) {
        include_once("./dbConn.php");
        $sql = "INSERT INTO package (location, image, details, active) VALUES ('$location', '$folder', '$details', '$check');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location:../pages/addPackage.php?success");
        } else {
            echo "Error uploading file";
        }
    } else {
        echo 'Failed uploading image';
    }
} else {
    header("location:../pages/login.php");
}