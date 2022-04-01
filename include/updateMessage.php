<?php
session_start();
if ($_SESSION['logged'] != 'true') {
    header('location:./login.php');
}
if (isset($_REQUEST['q'])) {
    $messId = $_REQUEST['q'];

    include_once("./dbConn.php");

    $sql = "UPDATE message SET checked = '1' WHERE messageId = '{$messId}';";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../pages/adminMessage.php");
    } else {
        echo "Error updating message";
    }
} else {
    header("location:../index.php");
}
