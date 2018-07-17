<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataTable</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyCodeIgniter</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('index.php/Admin/Index') ?>">Home</a></li>
        <li class="active"><a href="#">Blog</a></li>
        <li><a href="#">User</a></li>
      </ul>
    </div>
  </nav>
  <main role="main" class="container">
     <a href="<?php echo base_url('index.php/User/register') ?>" class="btn btn-primary mb-3 ml-3"><i class="glyphicon glyphicon-plus"></i> Add User</a>
    <br></br>
    <table id="dt-basic" class="table table-striped table-bordered" width="100%">
     <thead>
       <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Kodepos</th>
         <th>Email</th>
         <th>Username</th>
         <th>Password</th>
         <th>Register Date</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
      <?php if(is_array($records)): ?>
      <?php foreach ($records as $d) : ?>
       <tr>
         <td><?php echo $d['user_id'] ?></td>
         <td><?php echo $d['nama'] ?></td>
         <td><?php echo $d['kodepos'] ?></td>
         <td><?php echo $d['email'] ?></td>
         <td><?php echo $d['username'] ?></td>
         <td><?php echo $d['password'] ?></td>
         <td><?php echo $d['register_date'] ?></td>
         <td>
      <a class="btn btn-sm btn-warning mb-1" href="<?php echo base_url('index.php/Blog/update_view/'.$d['id']) ?>"><i class="glyphicon glyphicon-pencil"></i> Edit </a>
       <a class="btn btn-sm btn-info mb-1" href="<?php echo base_url('index.php/Blog/byId/'.$d['id']) ?>"><i class="glyphicon glyphicon-zoom-in"></i> View</a>
            <a class="btn btn-sm btn-danger mb-1" href="<?php echo base_url('index.php/Blog/delete_action/'.$d['id']) ?>"><i class="glyphicon glyphicon-trash"></i> Delete </a></td>
        </tr>
      <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>

</main>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#dt-basic').DataTable();
  } );
</script>
</body>
</html>