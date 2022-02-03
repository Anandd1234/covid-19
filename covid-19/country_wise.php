<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<!--google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@1,900&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">


 <title>covid-19 tracker</title>
 
 
   <!-- css-->
  
  
  
  <style>
  th{
	  color:red;
	  
  }
  .body
  {
	  background-color:#FFFAF0;
  }
  
 
 </style>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  </head>  
  
  <body>
<div class="container-fluid bg-warning p-5 text-center my-3">
<h1 style="color:red;">covid-19</h1>
<h2 class="text-primary"> A project to keep track covid-19 cases</h2>
<h2 class="text-secondary">Be safe and be secure</h2>
</div>
<div class="body">
<marquee style="color:green; font-size:40px; font-family: 'Be Vietnam Pro', sans-serif;
font-family: 'The Nautigal', cursive;">This Website is created by Anand Singh. Student of Technocrats Institute OF Technology.</marquee>

<div class="container">
<div class="row">
<div class="col-4">
<h5 style="color:yellow;">Total conformed</h5>
<?php 

 $jsonData = file_get_contents("https://api.covid19api.com/summary"); //get all contents from json file
    $data = json_decode($jsonData, true);    //it decodes data like an array  and tru value gives associated array
echo $data['Global']['TotalConfirmed']; ?>
</div>
<div class="col-4">
<h5 style="color:yellow;">Total recovered</h5>
<?php  echo $data['Global']['TotalRecovered']; ?>
</div>
<div class="col-4">
<h5 style="color:yellow;">Total deaths</h5>
<?php
echo $data['Global']['TotalDeaths'];
?>
</div>

</div>
</div>


<div class="container-fluid">
<table  class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Date</th>
<th scope="col">Countries</th>
<th scope="col">New Confirmed</th>
<th scope="col">New Recovered</th>
<th scope="col">New Decesed</th>

</tr>
</thead>
<tbody>

<?php

    // Retrieving Json Data
    $jsonData = file_get_contents("https://api.covid19api.com/summary"); //get all contents from json file
    $data = json_decode($jsonData, true);    //it decodes data like an array  and tru value gives associated array
  //echo $data['Countries'][0]['Country']
    // Counting the number of days in the Json File
    $statecount=count($data['Countries']);
  // echo $statecount;
$i=1;
while($i<$statecount)
{
	?>
<tr>
	<td><?php echo $data['Countries'][$i]['Date']  ?></td>
<td>	<?php echo $data['Countries'][$i]['Country']."<br>";?></td>

<td>  <?php   echo $data['Countries'][$i]['NewConfirmed']."<br>";?>
<td><?php	echo $data['Countries'][$i]['NewRecovered']."<br>";?>
<td><?php echo $data['Countries'][$i]['NewDeaths']."<br>";?></td>
	</tr>

	
	
	
<?php $i++; } ?>
</tbody>
</table>
</div>
<h4 Style="color:green;">Copyright @ Anandsingh</h4>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"</script>
  </body>
</html>