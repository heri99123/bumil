<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php") ?>
	<style type="text/css">
		body {
			font-family: 'Roboto', sans-serif;
			background: #f5f5f5;
		}

		.form-control {
			min-height: 41px;
			box-shadow: none;
			border-color: #ddd;
		}

		.form-control,
		.btn {
			border-radius: 3px;
		}

		.signup-form {
			width: 590px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form form {
			color: #555;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #fff;
			border: 1px solid #f3f3f3;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.signup-form h2 {
			color: #636363;
			font-weight: bold;
			margin-top: 0;
			text-align: center;
		}

		.signup-form p {
			text-align: center;
		}

		.signup-form hr {
			margin: 0 -30px 20px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form label {
			font-weight: normal;
			font-size: 13px;
		}

		.signup-form input[type="checkbox"] {
			margin-top: 2px;
		}

		.signup-form .btn {
			font-size: 16px;
			font-weight: bold;
			background: #3598dc;
			border: none;
			min-width: 140px;
		}

		.signup-form .btn:hover,
		.signup-form .btn:active {
			background: #2389cd;
			outline: none !important;
		}

		.signup-form a {
			text-decoration: underline;
		}

		.signup-form a:hover {
			text-decoration: none;
		}

		.signup-form form a {
			color: #3598dc;
			text-decoration: none;
		}

		.signup-form form a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="signup-form">

		<!-- Notifikasi data berhasil di simpan -->
		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-primary" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
		<?php endif; ?>

		<form action="<?php echo base_url('register'); ?>" method="post">
		  <fieldset>
			<h2 class="text-center">Sign Up</h2>
			<p class="text-center">Please fill in this form to create an account!</p>
			<hr>
			<div class="col-lg-12">
				<div class="row">
					<!-- Username -->
					<div class="col-md-6">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
							<span style="color: red">
								<?php echo form_error('username'); ?>
							</span>
						</div>
					</div>
					<!-- Tanggal Lahir -->
					<div class="col-md-6">
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir">
						</div>
					</div>
				</div>
				<!-- ./row -->

				<div class="row">
					<div class="col-md-6">
						<!-- Nama Lengkap -->
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama Lengkap">
							<span style="color: red">
								<?php echo form_error('nama'); ?>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<!-- No. Telp -->
						<div class="form-group">
							<label>No. Telp</label>
							<input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>" placeholder="No. Telp">
							<span style="color: red">
								<?php echo form_error('no_telp'); ?>
							</span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<!-- Email Address -->
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email">
							<span style="color: red">
								<?php echo form_error('email'); ?>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<!-- Password -->
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password">
							<span style="color: red">
								<?php echo form_error('password'); ?>
							</span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<!-- Foto -->
						<div class="form-group">
							<label>Foto</label>
							<input type="file" class="form-control" name="foto" placeholder="Foto">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" name="alamat" placeholder="Alamat" rows="8"><?php echo $alamat; ?></textarea>
							<span style="color: red">
								<?php echo form_error('alamat'); ?>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group" style="float: right;">
					<button type="submit" class="btn btn-primary btn-lg pull-right">Sign Up</button>
				</div>
			</div>
		  </fieldset>
		</form>
		<div class="text-center">Sudah punya akun?
			<a href="<?php echo base_url('login'); ?>">Silahkan Login</a>
		</div>
	</div>
</body>

</html>
