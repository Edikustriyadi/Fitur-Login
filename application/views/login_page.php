<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi Laundry</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dist/font-awesome/css/font-awesome.min.css">
		
	<style type="text/css">
		body{
			margin:0;
			background: grey;
			padding-top: 15%;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<div class="col-md-8 col-md-6" style="position: absolute;">
					<div class="list-group-item active">
						<p style="font-size: 20px; text-align: center; font-weight: bold;font-family: sans-serif;">Login</p>
					</div>
						<?php echo form_open('Login/cek_login');?>
						<div class="list-group-item list" style="box-shadow: 0px 0px 1px blue">
						<?php echo validation_errors(); ?>
						<?php echo $this->session->flashdata('username_salah');?>
						<?php echo $this->session->flashdata('password_salah');?>
						<?php echo $this->session->flashdata('salah_semua');?>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button>
						</div>
						<?php form_close();?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>