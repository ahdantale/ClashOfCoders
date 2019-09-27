<?php
session_start();

//$conn=mysqli_connect('localhost','id10943156_root','clash','id10943156_clashofcoder');
$conn=mysqli_connect('sql301.epizy.com','epiz_24549245','WrifMXXP7GczpK','epiz_24549245_clashofcoder');
//$conn=mysqli_connect('localhost','root','','clashofcoder');
    if($conn)
    {
       $blank="UPDATE `coders` SET `ANS1`='XXX',`ANS2`='XXX',`ANS3`='XXX',`ANS4`='XXX',`ANS5`='XXX',`ANS6`='XXX',`MPOINTS`='0',`POINTS`='0' WHERE TEAM_ID='".$_POST['teamID']."'";
        mysqli_query($conn,$blank);
        $get="SELECT * FROM coders WHERE TEAM_ID='".$_POST['teamID']."' AND PASS='".$_POST['pass']."'";
        $fire=mysqli_query($conn,$get);
        $rows=mysqli_fetch_array($fire);
        
        if($rows[1]==$_POST['teamID'] && $rows[2]==$_POST['pass'])
        {
           
            $_SESSION['userID']=$rows[1];
            $_SESSION['pass']=$rows[2];
            $_SESSION['count1']=0;
            $_SESSION['mpoints']=0;
            header('location:round3_phase1.php');
        }
        else
        {
           header('location:index.php');
        }
        
    
    }
    



?>