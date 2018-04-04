<!DOCTYPE html>
<html lang="en">
<head>
  <title>Models Array</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Andre Prayogo</a></li>
      <li><a href="#">1641720198</a></li>
      <li><a href="#">TI - 2B</a></li>
    </ul>
  </div>
</nav>
 	<main role="main" class="container">
      <div class="row">
      	<div class="col-6">
      		<h4>Biodata Saya dari Array</h4>
      		<table class="table">
      			<?php foreach ($biodata_query_array as $key => $value) { ?>
      				<tr>
      					<td><?php echo $value['id'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nama'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nim'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['alamat'] ?></td>
      				</tr>
      			<?php } ?>
      		</table>
      	</div>
      	<div class="col-6">
      		<h4>Biodata Saya dari Object</h4>
      		<table class="table">
      			<?php foreach ($biodata_query_object as $key => $value) { ?>
      				<tr>
      					<td><?php echo $value->id ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nama ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nim ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->alamat ?></td>
      				</tr>
      			<?php } ?>
      		</table>
      	</div>
      	<div class="col-6">
      		<h4>Biodata Saya dari Query Builder Array</h4>
      		<table class="table">
      			<?php foreach ($biodata_builder_array as $key => $value) { ?>
      				<tr>
      					<td><?php echo $value['id'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nama'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['nim'] ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value['alamat'] ?></td>
      				</tr>
      			<?php } ?>
      		</table>
      	</div>
      	<div class="col-6">
      		<h4>Biodata Saya dari Query Builder Object</h4>
      		<table class="table">
      			<?php foreach ($biodata_builder_object as $key => $value) { ?>
      				<tr>
      					<td><?php echo $value->id ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nama ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->nim ?></td>
      				</tr>
      				<tr>
      					<td><?php echo $value->alamat ?></td>
      				</tr>
      			<?php } ?>
      		</table>
      	</div>
      </div>
    </main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>