<?php
if(isset($_POST['submit'])){
    include_once('./dbConn.php');

    $name = $_POST['name'];
    $address = $_POST['address'];
    $review = $_POST['review'];

    $image = basename($_FILES['image']['name']);
    $tempName = $_FILES['image']['tmp_name'];

    $folder = "../images/".$image;

    if(move_uploaded_file($tempName, $folder)){
        $sql = "INSERT INTO review (name, address, image, review, status) VALUES('$name', '$address', '$image', '$review', 0);";
        if(mysqli_query($conn, $sql)){
            header("location:../index.php?msg=success");
        }else{
            header("location:../index.php?msg=failed");
        }
    }

}