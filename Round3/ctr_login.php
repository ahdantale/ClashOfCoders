<?php
session_start();
$_SESSION['userID']=$_POST['teamID'];
header('location:round3_phase1.php');
?>