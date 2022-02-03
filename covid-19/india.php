<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- google fonts  --><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <title>India cases!</title>
	<style>
	table{
	background-color:#FFFFF0;
	}
	#copy
	{
		background-color:blue;
	}
	</style>
	
  </head>
  <body>
    <div class="container-fluid bg-warning p-5 text-center my-3">
<h1  style="color:#0000FF; font-family: 'Orelega One', cursive;">covid-19</h1>
<h2 class="" style="color:#D2691E;"> A  project to keep track covid-19 cases</h2>
<h2><i style="color:red;"> Project by Anand Singh</i></h2>
</div>
<i><marquee style="color:#191970; font-size:28px; font-family: 'Orelega One', cursive;">Covid-19 project by Anand Singh . Student of Technocrats Institute Of Technology</marquee></i>
<br>
<!--table starting-->

<div class="container-fluid">
<div class="table-responsive">
<table class="table table-bordered table-striped text-center">
<thead>
<tr>
<th scope="col" style="color:green;">Date</th>
<th scope="col" style="color:green;">State</th>
<th scope="col" style="color:green;">Conformed</th>
<th scope="col" style="color:green;">Active</th>
<th scope="col" style="color:green;">Recovered</th>
<th scope="col" style="color:green;">Deaths</th>
<tr>
</thead>
<?php


$data=file_get_contents("https://data.covid19india.org/data.json");
$read=json_decode($data,true);
/*echo"<pre>";
print_r($read);
echo "</pre>";*/
$getdata=count($read['statewise']);

//echo $getdata;
$i=1;
while($i<$getdata)
{
?>
<tr>	
<td style="color:#800080;"><?php   echo $read['statewise'][$i]['lastupdatedtime']."<br>";  ?></td>
<td style="color:#DC143C;"><?php	echo $read['statewise'][$i]['state']."<br>";?></td>
<td  style="color:#A52A2A;"><?php	echo $read['statewise'][$i]['confirmed']."<br>";?></td>
<td style="color:#A52A2A;"><?php	echo $read['statewise'][$i]['active']."<br>";?></td>
<td style="color:#A52A2A;"><?php	echo $read['statewise'][$i]['recovered']."<br>";?></td>
<td style="color:#A52A2A;"><?php	echo $read['statewise'][$i]['deaths']."<br>";	?></td>
	


</tr>
<?php $i++; } ?>
</table>


</div>
</div>
<div class="container-fluid"  id="copy">
<h2 style="color:white; backround-color:blue;" class="text-center"> copyright @ Anand Singh</h2>


</div>


	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>