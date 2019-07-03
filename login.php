<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['login-password']);

    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db,$sql)
    or die(mysqli_error($db));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);


    // If result matched $email and $password, table row must be 1 row

    if($count == 1) {
        $_SESSION['email'] = $email;


        header("location: indexa.php");
    }else {


        echo '<script language="javascript">';
        echo 'alert("Wrong password/email")';
        echo '</script>';


        echo '<script language="javascript">';
        echo ' window.location.href = \'log_reg.php\';';
        echo '</script>';


    }
}