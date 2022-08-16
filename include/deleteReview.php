<?php

include_once('./dbConn.php');
if (isset($_REQUEST['rid'])) {
    $rid = $_REQUEST['rid'];

    $sql1 = "DELETE FROM review WHERE rid=$rid;";

    $res = mysqli_query($conn, $sql1);
    if ($res) {
        header('location:../pages/adminReview.php?msg=success');
    } else {
        header('location:../pages/adminReview.php?msg=failed');
    }
}
