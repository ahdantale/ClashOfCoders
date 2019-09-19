<?php 
session_start();
$_SESSION['count']++;
$count=$_SESSION['count'];
$que = array("1"=>"Que:- what is hello?", "2"=>"Que:- what is world?","3"=>"Que:- what is java?","4"=>"warning! you have reached your refresh limit. Type sorry to proceed next!");
if($_SESSION['count']>3)
{
  $_SESSION['count']=4;
  $count=$_SESSION['count'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Quiz</title>
</head>
  <body>
<div class="jumbotron">
 <h1 class="display-4">Hello <?php echo $_SESSION['userID'];?></h1>
  <p class="lead">Welcome to Phase3</p>
  <hr class="my-4">
 <form action="ctr3_round3.php" method="POST" >
  <label><?php echo $que[$count];?></label>
  <input type="text" name="ans4" style="width:400px;" class="form-control"><br>
  <input type="submit" class="btn btn-primary"><hr>
 
  </form>
 </div> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>