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
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyCodeIgniter</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Category</a></li>
        <li class="active"><a href="#">Blog</a></li>
      </ul>
    </div>
  </nav>
  <main role="main" class="container">
    <div class="row">
      <div class="col">
        <?php echo  $error ?>
        <?php echo  validation_errors() ?>
        <?php echo form_open_multipart('Blog/update_view/'.$records[0]['id']);?>
        <div class="form-group">
          <label for="author">ID</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $records[0]['id'] ?>">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" id="author" name="author" value="<?php echo $records[0]['author'] ?>">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $records[0]['date'] ?>">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $records[0]['title'] ?>">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input class="form-control" type="text" id="content" name="content" rows="3" value="<?php echo $records[0]['content'] ?>">
        </div>
        <img src="<?php echo base_url(); ?>/uploads/<?php echo $records[0]['image_file'] ?>" alt="File Tidak Ada" height="100px" width="100px">
        <div class="form-group">
          <label for="image_file">Image</label>
          <input type = "file" name = "image_file" size = "20" />
        </div>
        <input type="submit" name="update" value="Update" class="btn btn-primary">
      </form>
    </div>
  </div>
</main>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>