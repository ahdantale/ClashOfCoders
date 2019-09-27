<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Quiz</title>
    <SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
</SCRIPT>
  </head>
  <body onload="noBack();" 
	onpageshow="if (event.persisted) noBack();">
 
  <div class="jumbotron">
  <h1 class="display-4">Hello <?php echo $_SESSION['userID'];?></h1>
  <p class="lead">Welcome to Phase2</p>
  <hr class="my-4">
  <p></p>
  <form action="ctr2_round3.php" method="POST">
  <label><p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:.25in;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">There's a staircase with N steps, and you can climb 1 or 2 steps at a time. Given N, write afunction &nbsp; that returns the number of unique ways you can climb the staircase. The order of the steps matters.</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">For example, if N is 4, then there are 5 unique ways:</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">1, 1, 1, 1</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">2, 1, 1</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">1, 2, 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">1, 1, 2</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">2, 2</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">What if, instead of being able to climb 1 or 2 steps at a time, you could climb any number from a</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">No. of stairs - 20</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">set of positive integers X? For example, if X = {2, 4, 6}, you could climb 1, 3, or 5 steps at a</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">time. Generalize your function to take in X.</span></p>
<p style="margin:0in;margin-bottom:8.0pt;font-size:15px;font-family:&quot;Helvetica Neue&quot;,&quot;serif&quot;;color:black;border:none;margin-top:0in;margin-right:0in;margin-left:22.5pt;text-align:justify;"><span style="font-size:16px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;">70 Stairs 2,4,6,8</span></p></label>
  <input type="text" name="ans3" style="width:400px;" class="form-control"><br>
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