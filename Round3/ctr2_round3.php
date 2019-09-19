<?php
session_start();
$_SESSION['count']=0;
$ansof3=$_POST['ans3'];
if($ansof3=='java')
{
    header('location:round3_phase3.php');
}
else
{
    header('location:round3_phase2.php');
}

?>