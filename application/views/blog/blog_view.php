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
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MyCodeIgniter</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Category</a></li>
          <li class="active"><a href="<?php echo base_url('index.php/Blog/dataTable') ?>">Blog</a></li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container">
      <hr>
      <h1 class="text-center"><?php echo $records[0]['title'] ?></h1>
      <hr>
      <br>
      <div class="row">
        <div class="col-2"> </div>
        <div class="col-8">
          <center>
          <img src="<?php echo  base_url() ?>uploads/<?php echo $records[0]['image_file']  ?>" alt="Responsive Image" class="img-fluid" width="1000">
        </center>
        </div>
        <br>
        <div class="col-2"> </div>
        <h5><b>Date :</b> <?php echo  $records[0]['date']  ?></h5>
        <hr>
        <p><b>Content :</b> <?php echo $records[0]['content'] ?></p>
      </div>
    </main>
  </body>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>