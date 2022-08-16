<?php
session_start();
if ($_SESSION['logged'] == 'true') {
    include_once('./dbConn.php');
    if (isset($_REQUEST['rid'])) {
        $rid = $_REQUEST['rid'];
        $status = $_REQUEST['s'];

        $sql = "";
        if ($status == 0) {
            $sql = "UPDATE review SET status=1 WHERE rid=$rid;";
        }
        if ($status == 1) {
            $sql = "UPDATE review SET status=0 WHERE rid=$rid;";
        }
       
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('location:../pages/adminReview.php?msg=success');
        } else {
            header('location:../pages/adminReview.php?msg=failed');
        }
    } else {
        header('location: ../index.php');
    }
} else {
    header('location: ../index.php');
}
