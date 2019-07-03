<?php
session_start();


$con = mysqli_connect("localhost", "root", '');

mysqli_select_db($con, "dilitz");

if(isset($_POST['my_contact'])){ $my_contact = $_POST['my_contact']; }
if(isset($_POST['my_email'])){ $my_email = $_POST['my_email']; }
if(isset($_POST['job_choice'])){ $job_choice = $_POST['job_choice']; }
if(isset($_POST['level_req'])){ $level_req = $_POST['level_req']; }
if(isset($_POST['location'])){ $location = $_POST['location']; }
if(isset($_POST['about_me'])){ $about_me = $_POST['about_me']; }

$info = "insert into myskills(my_contact, my_email, job_choice,level_req, location, about_me ) values ('$my_contact', '$my_email', '$job_choice', '$level_req', '$location', '$about_me')";

mysqli_query($con, $info);

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("location:job-post.php");


mysqli_close($con);