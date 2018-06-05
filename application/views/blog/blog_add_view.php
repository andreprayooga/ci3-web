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
          <li class="active"><a href="#">Blog</a></li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container">
      <div class="row">
        <div class="col">
          <?php echo  validation_errors() ?>
          <?php echo form_open_multipart('Blog/add_view');?>
          <div class="form-group">
            <label for="author">ID</label>
            <input type="text" class="form-control form-control-sm" id="id" name="id" placeholder="Input ID">
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control form-control-sm" id="author" name="author" placeholder="Input Author">
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="Date">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Input Title">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control form-control-sm" id="content" name="content" placeholder="Enter Content" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="image_file">Image</label>
            <input type = "file" class="form-control-file" name = "image_file" size = "20" />
          </div>
          <input type="submit" name="add" value="Add Blog" class="btn btn-primary">
        </form>
      </div>
    </div>
  </main>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>