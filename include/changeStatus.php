<?php
if (isset($_REQUEST['pid'])) {
    include_once('./dbConn.php');
    $pid = $_REQUEST['pid'];
    $status = $_REQUEST['r'];
    $sql = "";
    if ($status == '0') {
        $sql = "update package set active='1' where pid = '$pid';";
    } else {
        $sql = "update package set active='0' where pid = '$pid';";
    }

    $res = mysqli_query($conn, $sql);

    if ($res) {
        header('location:../pages/adminPackage.php?msg=success');
    } else {
        header('location:../pages/adminPackage.php?msg=failed');
    }
}
