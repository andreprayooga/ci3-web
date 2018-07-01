<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ci3 Login</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/register.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<?php echo  validation_errors() ?>
          <?php echo form_open('User/login');?>
		<div class="container">
			<div class="row" style="margin-top:100px">
				<div class="col-xs-12 col-sm-10 col-md-6 col-sm-offset-2 col-md-offset-3">
						<center><h2>Welcome User</h2></center>
						<hr>
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required="">
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password" name="password" placeholder="Input Password" required="">
							</div>
						</div>
						<button type="submit" class="btn btn-primary float-right">Submit</button>
				</div>
			</div>
		</div>
		</form>
		<?php echo form_close(); ?>
	</body>
</html>