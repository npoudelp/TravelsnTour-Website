<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
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
        echo '<span class="display-1">Message Sent<br><a href="../index.php" class="display-1 text-decoration-none btn btn-outline-danger">Go To Home</a></span>';
    }
    else{
        echo "Error sending message" ;
    }
}else{
    header("location:../pages/contact.php");
}