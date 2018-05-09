<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataTable</title>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
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
    <table id="dt-basic" class="table table-striped table-bordered">
     <thead>
       <tr>
         <th>ID</th>
         <th>Tanggal</th>
         <th>Judul</th>
         <th>Content</th>
         <th>Image</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
      <?php foreach ($records as $d) : ?>
       <tr>
         <td><?php echo $d['id'] ?></td>
         <td><?php echo $d['date'] ?></td>
         <td><?php echo $d['title'] ?></td>
         <td><?php echo $d['content'] ?></td>
         <td><img src="<?php echo base_url() ?>/uploads/<?php echo $d['image_file'] ?>" alt="" width="100px" height="80px"></td>
         <td>
      <a class="btn btn-sm btn-warning mb-1" href="<?php echo base_url('index.php/Blog/update_view/'.$d['id']) ?>">Edit </a>
       <a class="btn btn-sm btn-info mb-1" href="<?php echo base_url('index.php/Blog/byId/'.$d['id']) ?>">View</a>
            <a class="btn btn-sm btn-danger mb-1" href="<?php echo base_url('index.php/Blog/delete_action/'.$d['id']) ?>">Delete </a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</main>
<script>
  $(document).ready(function() {
    $('#dt-basic').DataTable();
  } );
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
</body>
</html>