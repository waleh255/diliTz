<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dilitz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['chosen_job'])){ $chosen_job = $_POST['chosen_job']; }


$sql = "SELECT job_title, employer_email FROM jobs WHERE (job_title like '". $chosen_job ."')";
$result = $conn->query($sql) or die(mysqli_error($conn));

$row = $result->fetch_assoc();
$employer_email=$row["employer_email"];


$to=$employer_email;

$subject= 'Application for ' . $chosen_job;

$message= '<h1>Hi There!</h1> <br> <p>I am interested in the </p>' . $chosen_job . '<p>Opportunity. Please find my details below!</p> ';

//headers
$headers = "From diliTz\r\n";
$headers .= "Content-type: text/html\r\n";




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail -> isSMTP();
$mail->SMTPAuth= true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail-> isHTML();
$mail->Username='dilitz123@gmail.com';
$mail->Password= 'dilitz000';
$mail->SetFrom('dilitz123@gmail.com');
$mail->Subject=$subject;
$mail->Body = $message;
$mail->addAddress('dilitz123@gmail.com');

$mail->send();

echo '<script language="javascript">';
echo 'alert("You Have Successfully Applied!")';
echo '</script>';


echo '<script language="javascript">';
echo ' window.location.href = \'job-post.php\';';
echo '</script>';
















