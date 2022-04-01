<?php
if (isset($_POST['submit'])) {
    $location = $_POST['location'];
    $details = $_POST['details'];
    $image = basename($_FILES['file']['name']);
    $imageTemp = $_FILES['file']['tmp_name'];
    $folder = '../images/'.$image;
    
    if(move_uploaded_file($imageTemp,$folder)){
        include_once("./dbConn.php");
        $sql = "INSERT INTO package (location, image, details) VALUES ('$location', '$folder', '$details');";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:../pages/addPackage.php?success");
        }else{
            echo "Error uploading file";
        }
    }else{
        echo 'Failed uploading image';
    }

} else {
    header("location:../pages/login.php");
}
