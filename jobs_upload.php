<?php
session_start();


$con = mysqli_connect("localhost", "root", '');

mysqli_select_db($con, "dilitz");

if(isset($_POST['job_title'])){ $job_title = $_POST['job_title']; }
if(isset($_POST['employer_contact'])){ $employer_contact = $_POST['employer_contact']; }
if(isset($_POST['employer_email'])){ $employer_email = $_POST['employer_email']; }
if(isset($_POST['job_type'])){ $job_type = $_POST['job_type']; }
if(isset($_POST['location'])){ $location = $_POST['location']; }
if(isset($_POST['job_description'])){ $job_description = $_POST['job_description']; }
if(isset($_POST['level_req'])){ $level_req = $_POST['level_req']; }


$info = "insert into jobs(job_title, employer_contact, employer_email,job_type, location, job_description, level_req) values ('$job_title', '$employer_contact', '$employer_email', '$job_type', '$location', '$job_description', '$level_req')";
mysqli_query($con, $info);
header("location:job-post.php");

mysqli_close($con);