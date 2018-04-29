<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
  <head>
	    <meta charset="utf-8">
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  </head>
  <body>
	 <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Web Framework</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<button class="btn btn-danger navbar-btn">Button</button>
		</div>
	</nav>
	   <main role="main" class="container">
		<?php echo validation_errors() ?>
     <?php echo form_open( 'category/update/'.$cat_update['cat_id'], array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<div class="form-group">
   	<label for="cat_name">Nama Kategori</label>
   	<input type="text" class="form-control" name="cat_name" value="<?php echo $cat_update['cat_name'] ?>" required>
   	<div class="invalid-feedback">Isi judul dulu gan</div>
	</div>

	<div class="form-group">
   	<label for="text">Deskripsi</label>
   	<input type="text" class="form-control" name="cat_description" value="<?php echo $cat_update['cat_description'] ?>" required>
   	<div class="invalid-feedback">Isi deskripsinya dulu gan</div>
	</div>
	<button id="submitBtn" type="submit" class="btn btn-success">Ubah</button>
	</main>                     
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>