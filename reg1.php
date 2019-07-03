<?php

session_start();


$con = mysqli_connect("localhost", "root", '');

mysqli_select_db($con, "dilitz");

if(isset($_POST['fname'])){ $fname = $_POST['fname']; }
if(isset($_POST['lname'])){ $lname = $_POST['lname']; }
if(isset($_POST['email'])){ $email = $_POST['email']; }
if(isset($_POST['password'])){ $password = $_POST['password']; }
if(isset($_POST['confpassword'])){ $confpassword = $_POST['confpassword']; }


$s = "select * from users where email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num == 1){

    echo '<script language="javascript">';
    echo 'alert("An account with that email exists!")';
    echo '</script>';


    echo '<script language="javascript">';
    echo ' window.location.href = \'log_reg.php\';';
    echo '</script>';

}

else{
    $reg = "insert into users (fname, lname, email,password, confpassword) values ('$fname', '$lname', '$email', '$password', '$confpassword')";
    mysqli_query($con, $reg);
    header("location: indexb.php");

//The hash function

        if ($stmt = mysqli_prepare($con, $reg)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_password);

            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: log_reg.php");
            } else {
                echo "Samahani! Kuna tatizo, Tafadhali jaribu tena baadae.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($con);

?>


