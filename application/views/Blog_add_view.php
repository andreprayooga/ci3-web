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
    <div class="row">
      <div class="col">
        <?php echo  validation_errors() ?>
        <?php echo form_open_multipart('Blog/add_view');?>
        <div class="form-group">
          <label for="id">Id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Id">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" id="author" name="author" placeholder="Author">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date" name="date" placeholder="Date">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="image_file">Image</label>
          <input type = "file" name = "image_file" size = "20" />
        </div>
        <input type="submit" name="add" value="Tambah" class="btn btn-success">
      </form>
    </div>
  </div>
</main>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>