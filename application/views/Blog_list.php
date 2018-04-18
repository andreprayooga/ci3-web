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
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary">Tambah Blog</a>
      <ul class="list-unstyled">
  <?php foreach ($records as $key => $value): ?>
    <li class="img-thumbnail">
    <img class="mr-3" src="<?php echo base_url() ?>uploads/<?php echo $value['image_file'] ?>" alt="Generic placeholder image" width="350px" height="250px">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5>
      <h6 class="text-muted"><?php echo $value['date'] ?></h6>
      <?php echo $value['content'] ?>
      <br>
      <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">View Details</a>
      <div class="button">
      <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Blog/update_view/'.$value['id']) ?>">Update  </a>
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Blog/delete_action/'.$value['id']) ?>">Delete </a>
    </div>
  </li>
  <?php endforeach ?>
</ul>
    </main>       
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>