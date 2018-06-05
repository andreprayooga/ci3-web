<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyCodeIgniter</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active"><a href="#">Category</a></li>
      </ul>
    </div>
  </nav>
    <main role="main" class="container">
      <?php echo validation_errors() ?>
      <?php echo form_open( 'category/update/'.$cat_update['cat_id'], array('class' => 'needs-validation', 'novalidate' => '') ); ?>
      <div class="form-group">
        <label for="cat_name">Nama Kategori</label>
        <input type="text" class="form-control" name="cat_name" value="<?php echo $cat_update['cat_name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="text">Deskripsi</label>
        <input type="text" class="form-control" name="cat_description" value="<?php echo $cat_update['cat_description'] ?>" required>
      </div>
      <button id="submitBtn" type="submit" class="btn btn-primary">Update</button>
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>