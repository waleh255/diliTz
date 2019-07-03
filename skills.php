<?php
$servername = "localhost";
$dbname = "jobdb";
session_start();


$con = mysqli_connect("localhost", "root", '');

mysqli_select_db($con, "jobdb");

$clskill=0;
$carpskill=0;
$cookskill=0;
$electricskill=0;
$plskill=0;

if(isset($_POST['clskill'])){ $clskill = $_POST['clskill']; }
if(isset($_POST['cllevel'])){ $cllevel = $_POST['cllevel']; }
if(isset($_POST['electricskill'])){ $electricskill = $_POST['electricskill']; }
if(isset($_POST['electriclevel'])){ $electriclevel = $_POST['electriclevel']; }
if(isset($_POST['plskill'])){ $plskill = $_POST['plskill']; }
if(isset($_POST['pllevel'])){ $pllevel = $_POST['pllevel']; }
if(isset($_POST['carpskill'])){ $carpskill = $_POST['carpskill']; }
if(isset($_POST['carplevel'])){ $carplevel = $_POST['carplevel']; }
if(isset($_POST['cookskill'])){ $cookskill = $_POST['cookskill']; }
if(isset($_POST['cooklevel'])){ $cooklevel = $_POST['cooklevel']; }


$info = "insert into skill(clskill, cllevel, electricskill,electriclevel, plskill, pllevel, carpskill, carplevel, cookskill, cooklevel) values ('$clskill', '$cllevel', '$electricskill', '$electriclevel', '$plskill', '$pllevel', '$carpskill', '$carplevel', '$cookskill', '$cooklevel')";
mysqli_query($con, $info);

mysqli_close($con);
?>