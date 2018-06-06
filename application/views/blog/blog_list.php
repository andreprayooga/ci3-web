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
          <li><a href="<?php echo base_url("index.php/Biodata") ?>">Home</a></li>
          <li><a href="<?php echo base_url("index.php/Blog/dataTable") ?>">DataTable</a></li>
          <li><a href="<?php echo base_url("index.php/Blog/pagination") ?>">Pagination</a></li>
        </ul>
        <?php if ($this->session->userdata('level') == 1): ?>
        <a class="btn btn-danger navbar-btn" href="<?php echo base_url("index.php/Blog/add_view") ?>">Add Blog</a><?php endif; ?>
        <ul class="nav navbar-nav navbar-right">
        <a class="btn btn-primary navbar-btn" href="<?php echo base_url("index.php/User/logout") ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </ul>
      </div>
    </nav>
  <main role="main" class="container">
    <ul class="list-unstyled">
      <div class="row">
      <?php foreach ($records as $key => $value): ?>
        <div class="row">
          <div class="col-md-6"><img src="<?php echo base_url() ?>uploads/<?php echo $value['image_file'] ?>" class="img-thumbnail"></div>
          <div class="media-body">
            <h5 class="mt-0 mb-1"><b>Title :</b> <?php echo $value['title'] ?></h5>
            <h5 class="mt-0 mb-1"><b>Author :</b> <?php echo $value['author'] ?></h5>
            <h5 class="text-muted"><b>Date :</b> <?php echo $value['date'] ?></h5>
            <b>Content :</b> <?php echo word_limiter($value['content'], 70) ?>
          </div>
            <div class="button">
              <?php if ($this->session->userdata('level') == 1): ?>
              <a class="btn btn-sm btn-warning" href="<?php echo base_url('index.php/Blog/update_view/'.$value['id']) ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a><?php endif; ?>
              <a class="btn btn-sm btn-info" href="<?php echo base_url('index.php/Blog/byId//'.$value['id']) ?>"><i class="glyphicon glyphicon-eye-open"></i> View</a>
              <?php if ($this->session->userdata('level') == 1): ?>
              <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Blog/delete_action/'.$value['id']) ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a><?php endif; ?>
            </div>          
        </div>
        <br>
        <?php endforeach ?>
      </ul>
      </div>
      <?php 
        if(isset($links)){
          echo $links;
        } ?>
    </main>
  </body>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>