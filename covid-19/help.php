<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Help me!</title>
	<style>
	body
	{
		background:yellow;
	}
	#a1
	{
		font-size:90px;
	}
	#a2
	{
		font-size:30px;
	}
	#a3
	{
		font-size:40px;
	}
	#a4
	{
		font-size:30px;
	}
	</style>
  </head>
  <body>
    <form action="" method="post">
	<DIV CLASS="text-center">
	<h2 STYLE="color:red;"><I>IF YOU WANT ANY HELP PEASE CONTACT US</I></h2>
	<br><br><br><br>
	<label id="a4" style="color:green;">ENTER YOUR DETAILS FOR HELP</label><BR>
    <input type="text" value="enter your details" name="your" id="a1" class="text-center"><br><br><br><br>
	<LABEL id="a4" style="color:green;">ENTER YOUR MOBILE NUMBER</LABEL><br>
    <input type="number"  name="mobile" id="a2"><br><br><br><br><br>
	<input type="submit" name="submit" value="submit" id="a3"><br>
</div>	
	</form>
	<?php
	$server='localhost';
    $user='root';
    $pass='';
    $db='help_covid';
    $conn=mysqli_connect($server,$user,$pass,$db);
	if($conn)
	{
		echo"connected";
		if(isset($_POST['submit']))
		{
			$your=$_POST['your'];
		    $mobile=$_POST['mobile'];
		   $insertquery="INSERT into help_covid19(your,mobile)values('$your','$mobile')";
           $res=mysqli_query($conn,$insertquery);
            if($res)
			{
				echo"inserted";	 
				echo"our team will reached you very soon";
				echo"thank you";
				
				
				
			}
			else
			{
				echo"not inserted";
			}
		}
	}
	else
	{
		echo"not connected";
	}
	?>
	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>