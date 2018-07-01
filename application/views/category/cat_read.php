<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyCodeIgniter</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/Biodata')?>">Home</a></li>
        <li><a href="<?php echo base_url('index.php/Blog')?>">Blog</a></li>
        <li class="active"><a href="#">Category</a></li>
      </ul>
    </div>
  </nav>
  <main role="main" class="container">
    <a href="<?php echo base_url('index.php/category/create') ?>" class="btn btn-primary mb-3 ml-3"><i class="glyphicon glyphicon-plus"></i> Add Category</a>


    <br></br>
    <table class="table table-bordered" id="table">
      <thead>
        <th>No.</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php foreach ($cat_read as $key => $value): ?>
        <tr>
          <td><?php echo $key+1 ?></td>
          <td><?php echo $value['cat_name'] ?></td>
          <td><?php echo $value['cat_description'] ?></td>
          <td>
            <a href="<?php echo base_url('index.php/category/update/'.$value['cat_id']) ?>" class="btn btn-sm btn-warning">
              <i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a href="<?php echo base_url('index.php/category/delete/'.$value['cat_id']) ?>" class="btn btn-sm btn-danger">
              <i class="glyphicon glyphicon-trash"></i> Delete</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable();
  } );
</script>
  </body>
</html>