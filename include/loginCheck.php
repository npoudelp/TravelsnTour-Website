<?php
if(isset($_POST['submit'])){
    include_once('./dbConn.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = $_POST['checkbox'];

    $sql = "SELECT type, userName, email, password FROM users WHERE email='{$email}';";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['email'] == $email && $row['password'] == $password && $row['type'] == 'admin'){
                session_start();
                $_SESSION['logged'] = 'true';
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['email'] = $row['email'];
                header('location: ../pages/admin.php');
            }
        }
    }else{
        header('location:../pages/login.php?error_login');
    }
}else{
    header('location:../pages/login.php');
}