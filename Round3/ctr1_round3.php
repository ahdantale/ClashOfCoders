<?php
session_start();
$_SESSION['ppoints']=0;

//$conn=mysqli_connect('localhost','id10943156_root','clash','id10943156_clashofcoder');
$conn=mysqli_connect('sql301.epizy.com','epiz_24549245','WrifMXXP7GczpK','epiz_24549245_clashofcoder');
//$conn=mysqli_connect('localhost','root','','clashofcoder');
$ansof1=$_POST['ans1'];

$ansSetOne=array('2','16','11');
// if($ansof1==$ansSetOne[0]||$ansof1==$ansSetOne[1]||$ansof1==$ansSetOne[2])
// {
//     $_SESSION['ppoints']+=150;
// }

if($ansof1==$ansSetOne[0]){
    $_SESSION['ppoints']+=150;
} else if ($ansof1==$ansSetOne[1]) {
    $_SESSION['ppoints']+=150;
} else if($ansof1==$ansSetOne[2]){
 $_SESSION['ppoints']+=150;
} else {
    $_SESSION['ppoints']+=0;
}

// $ansSetTwo=array('000','111','000');
// if($ansof2==$ansSetTwo[0]||$ansof2==$ansSetTwo[1]||$ansof2==$ansSetTwo[2])
// {
//     $_SESSION['ppoints']+=30;
// }

if($ansof1!==NULL)
{
    $insert1="UPDATE coders SET ANS1='".$_POST['ans1']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
    if(mysqli_query($conn,$insert1))
    {
        header('location:round3_phase2.php');
    }
    else{
        header('location:round3_phase1.php');
    }
}
// if($ansof2!==NULL)
// {
//     $insert2="UPDATE coders SET ANS2='".$_POST['ans2']."',MPOINTS='".$_SESSION['mpoints']."',POINTS='".$_SESSION['ppoints']."' WHERE TEAM_ID='".$_SESSION['userID']."'";
//     if(mysqli_query($conn,$insert2))
//     {
//     header('location:round3_phase2.php');
//     }
//     else
//     {
//     header('location:round3_phase1.php');
//     }
// }


?>