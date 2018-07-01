<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ci3 Register</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/register.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<?php echo  validation_errors() ?>
		<?php echo form_open_multipart('User/register');?>
		<div class="container">
			<div class="row" style="margin-top:100px">
				<div class="col-xs-12 col-sm-10 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form>
						<center><h2>Register User</h2></center>
						<hr>
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name" value="<?php echo set_value('nama') ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="kodepos" class="col-sm-2 col-form-label">KodePos</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="kodepos" name="kodepos"placeholder="Enter KodePos" value="<?php echo set_value('kodepos') ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo set_value('email') ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="username" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo set_value('username') ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password" name="password" placeholder="Input Password" value="<?php echo set_value('password') ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="level" class="col-sm-2 col-form-label">Level</label>
							<div class="col-lg-10">
								<select class="form-control-lg" id="level" name="level" value="<?php echo set_value('level') ?>">
									<option value="0">User</option>
									<option value="1">Admin</option>
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-primary float-right" >Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>