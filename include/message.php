<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $checkbox = $_POST['checkbox'];
    $check = "0";
    if($checkbox == 'check'){
        $check = "1";
    }

    include_once("../include/dbConn.php");
    $sql = "INSERT INTO message (name, phone, message, callBack) VALUES ('{$name}', '{$phone}', '{$message}', '{$check}');";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Message sent sucessfully";
    }
    else{
        echo "Error sending message" ;
    }
}else{
    header("location:../pages/contact.php");
}