<?php
session_start();

//$conn=mysqli_connect('localhost','id10943156_root','clash','id10943156_clashofcoder');
$conn=mysqli_connect('sql301.epizy.com','epiz_24549245','WrifMXXP7GczpK','epiz_24549245_clashofcoder');
//$conn=mysqli_connect('localhost','root','','clashofcoder');
$ansof1=$_POST['ans1'];
$ansof2=$_POST['ans2'];
$ansof3=$_POST['ans3'];
$ansof4=$_POST['ans4'];
$answers=array("28","25","1048576","28");
// if($ansof1==$answers[0]||$ansof2==$answers[1]||$ansof3==$answers[2]||$ansof4==$answers[0])
// {
//   $_SESSION['ppoints']+=350+$_SESSION['mpoints'];
// }
// else{
//     $_SESSION['ppoint']+=$_SESSION['mpoints'];
// }
if($ansof1==$answers[0]){
    $_SESSION['ppoints']+=350+$_SESSION['mpoints'];
} else if ($ansof2==$answers[1]) {
    $_SESSION['ppoints']+=350+$_SESSION['mpoints'];
} else if($ansof3==$answers[2]){
    $_SESSION['ppoints']+=350+$_SESSION['mpoints'];
}else if($ansof4==$answers[3]){
     $_SESSION['ppoints']+=350+$_SESSION['mpoints'];
} 
else {
     $_SESSION['ppoints']+=$_SESSION['mpoints'];
}
if($ansof1!==NULL)
{
  
    $insert="UPDATE coders SET ANS4='".$_POST['ans1']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof2!==NULL)
{
    
    $insert="UPDATE coders SET ANS5='".$_POST['ans2']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof3!==NULL)
{
    $insert="UPDATE coders SET ANS6='".$_POST['ans3']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}
if($ansof4!==NULL)
{
   
    $insert="UPDATE coders SET ANS4='".$_POST['ans4']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert))
    {
        header('location:complete.php');
    }
    else{
        header('location:round3_phase3.php');
    }
}

?>