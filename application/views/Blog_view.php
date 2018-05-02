<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url() ?>assets/img/bootstrap.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Bootstrap
    </a>
  </nav>
  <main role="main" class="container">
    <h1 class="text-center"><?php echo $records[0]['title'] ?></h1>
    <h6 class="text-muted">Tanggal : <?php echo  $records[0]['date']  ?></h6>
    <div class="row">
      <div class="col-2"> </div>
      <div class="col-8">
        <img src="<?php echo  base_url() ?>uploads/<?php echo $records[0]['image_file']  ?>" alt=" " class="">
      </div>
      <div class="col-2"> </div>
      <p><?php echo $records[0]['content'] ?></p>
    </div>
  </main>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>