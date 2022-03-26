<?php
if(isset($_REQUEST['q'])){
    $packId = $_REQUEST['q'];
    $image = $_REQUEST['r'];
    echo $image;
    // include_once("./dbConn.php");
    // $sql = "DELETE FROM package WHERE packageId = '{$packId}';";
    // $result = mysqli_query($conn, $sql);
    // if($result){
    //     header("location: ../pages/adminPackage.php");
    // }else{
    //     echo 'error deleting package';
    // }

}else{
    header("location:../index.php");
}