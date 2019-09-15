<?php
session_start();
$ansof4=$_POST['ans4'];
if($ansof4=='msg'||$ansof4=='planet'||$ansof4=='lang'||$ansof4=='sorry')
{
    header('location:round3_bonus.php');
}
else
{
    header('location:round3_phase3.php');
}

?>