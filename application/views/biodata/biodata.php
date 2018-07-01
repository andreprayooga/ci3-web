<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Models Array</title>
    <meta charset="utf-8">
    <title>Biodata</title>
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
          <li><a href="#">Blog</a></li>
          <li><a href="#">Category</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url('index.php/User/login')?>"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
              <li><a href="<?php echo base_url('index.php/User/register')?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="table-responsive">
        <h4>Biodata Saya dari Array</h4>
        <table class="table table-hover">
          <?php foreach ($biodata_query_array as $key => $value) { ?>
          <tr>
            <td><?php echo $value['id'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['nama'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['nim'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['alamat'] ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="table-responsive">
        <h4>Biodata Saya dari Object</h4>
        <table class="table table-hover">
          <?php foreach ($biodata_query_object as $key => $value) { ?>
          <tr>
            <td><?php echo $value->id ?></td>
          </tr>
          <tr>
            <td><?php echo $value->nama ?></td>
          </tr>
          <tr>
            <td><?php echo $value->nim ?></td>
          </tr>
          <tr>
            <td><?php echo $value->alamat ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="table-responsive">
        <h4>Biodata Saya dari Query Builder Array</h4>
        <table class="table table-hover">
          <?php foreach ($biodata_builder_array as $key => $value) { ?>
          <tr>
            <td><?php echo $value['id'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['nama'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['nim'] ?></td>
          </tr>
          <tr>
            <td><?php echo $value['alamat'] ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="table-responsive">
        <h4>Biodata Saya dari Query Builder Object</h4>
        <table class="table table-hover">
          <?php foreach ($biodata_builder_object as $key => $value) { ?>
          <tr>
            <td><?php echo $value->id ?></td>
          </tr>
          <tr>
            <td><?php echo $value->nama ?></td>
          </tr>
          <tr>
            <td><?php echo $value->nim ?></td>
          </tr>
          <tr>
            <td><?php echo $value->alamat ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>