<?php
$ansof1=$_POST['ans1'];
$ansof2=$_POST['ans2'];
if($ansof1=='hello' || $ansof2=='world')
{
    header('location:round3_phase2.php');
}
else
{
    header('location:round3_phase1.php');
}

?>