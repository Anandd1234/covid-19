<?php include ("lalipop.php"); ?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
 <title>covid-19 tracker</title>
  </head>
  <body>
<div class="container-fluid bg-light p-5 text-center my-3">
<h1>covid-19</h1>
<h2 class="text-muted"> an opensource project to keep track covid-19 cases</h2>
</div>
<div class="container">
<div class="row">
<div class="col-4">
<h5>conformed</h5>
</div>
<div class="col-4">
<h5>recovered</h5>

</div>
<div class="col-4">
<h5>deaths</h5>

</div>

</div>
</div>




<div class="container-fluid">
<table  class="table">
<thead class="thead-dark">
<tr>
<th scope="col">countries</th>
<th scope="col">Confirmed</th>
<th scope="col">recovered</th>
<th scope="col">decesed</th>
</tr>
</thead>
<tbody>
<?php
	$i=1;
	while($i<$statecount)
	{
?>

<tr>
<th><?php echo $data['Countries'][$i]['Country']."<br>";?></th>
<td><?	echo $data['Countries'][$i]['Date']."<br>";?></td>
 <td> </td>
  <td></td>
</tr>
	<?php } ?>
</tbody>
</table>
</div>

    <!-- bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"</script>
  </body>
</html>