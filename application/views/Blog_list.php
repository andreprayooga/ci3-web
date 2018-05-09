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
    <a class="navbar-brand" href="<?php echo base_url("index.php/Blog") ?>">
      <img src="<?php echo base_url() ?>assets/img/bootstrap.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Bootstrap
    </a>
  </nav>
  <main role="main" class="container">
    <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary mb-4 mt-3">Add Blog</a>
    <a href="<?php echo base_url("index.php/Blog/dataTable") ?>" class="btn btn-outline-info ml-2 mb-4 mt-3 float-right">Blog DataTable</a>
    <a href="<?php echo base_url("index.php/Blog/pagination") ?>" class="btn btn-outline-info mb-4 mt-3 float-right">Blog Pagination</a>
    <ul class="list-unstyled">
      <div class="row">
      <?php foreach ($records as $key => $value): ?>
        <li class="img-responsive mb-3 mr-3">
          <img class="mr-3" src="<?php echo base_url() ?>uploads/<?php echo $value['image_file'] ?>" alt="Generic placeholder image" width="250px" height="175px">
          <div class="media-body">
            <h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5>
            <h6 class="text-muted"><?php echo $value['date'] ?></h6>
            <?php echo $value['content'] ?>
            <!--  <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">View Details</a> -->
          </div>
            <div class="button">
              <a class="btn btn-sm btn-warning" href="<?php echo base_url('index.php/Blog/update_view/'.$value['id']) ?>">Edit</a>
              <a class="btn btn-sm btn-info" href="<?php echo base_url('index.php/Blog/byId//'.$value['id']) ?>">View</a>
              <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Blog/delete_action/'.$value['id']) ?>">Delete</a>
            </div>
          
        </li>
        <!-- <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav> -->
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