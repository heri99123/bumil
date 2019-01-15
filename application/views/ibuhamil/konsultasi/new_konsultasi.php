<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("ibuhamil/_partials/head.php") ?>

</head>

<body id="page-top" style="background-color: #158CBA;">

	<div class="container">

		<!-- Nyoba navbar -->
		<?php $this->load->view("ibuhamil/_partials/navbar.php") ?>

		<div id="wrapper" style="background-color: white;">

			<!-- <?php //$this->load->view("ibuhamil/_partials/sidebar.php") ?> -->

			<!-- Sidebar Baru -->
			<!-- <ul class="sidebar navbar-nav" style="background-color: white; margin-left: 3%;margin-right: 1%;">
			<img src="<?php echo base_url('upload/user/'.$user->foto); ?>" width="100%" style="margin-top: 7%;">
			<br>
			<b>Nama</b> <?php echo $user->nama; ?> <br> <br>

			<b>Email</b> <?php echo $user->email; ?> <br> <br>

			<b>Tanggal Lahir</b> <?php $date = new DateTime($user->tanggal_lahir);
			echo $date->format('d/m/Y');?> <br> <br>

			<b>No. Telp</b> <?php echo $user->no_telp; ?> <br> <br>

			<b>Alamat</b> <?php echo $user->alamat; ?> <br> <br>
		</ul> -->

		<?php echo $this->load->view("ibuhamil/_partials/sidebar"); ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissable" role="alert">
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<?php $this->load->view("ibuhamil/_partials/breadcrumb.php") ?>

				<!-- <h3>Tampilkan informasi selamat datang ibu hamil</h3> -->

				<!-- form konsultasi -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('ibuhamil/konsultasi'); ?>">
							<i class="fas fa-arrow-left"></i> Back
						</a>
					</div>

					<div class="card-body">
						<!-- Success validation error -->
						<!-- <div class="form_error">
						echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
					</div> -->

					<!-- Failed validation error -->
					<!-- <div class="invalid-feedback">
					echo form_error('username'); ?>
				</div> -->

				<div class="col-lg-12">
					<div class="row">
						<div class="col-6">
							<form action="<?php echo site_url('ibuhamil/konsultasi/'); ?>" method="post" enctype="multipart/form-data">
								<!-- <h3>Form Konsultasi Ibu</h3>
								<p>Untuk melakukan konsultasi silahkan isi form dibawah ini:</p> -->

								<div class="row">
									<!-- Tinggi Badan -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="tinggi_badan">Tinggi Badan* (cm)</label>
											<input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
											<span style="color: red">
												<?php echo form_error('tinggi_badan'); ?>
											</span>
										</div>
									</div>

									<!-- Berat Badan -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="berat_badan">Berat Badan* (kg)</label>
											<input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan">
											<span style="color: red">
												<?php echo form_error('berat_badan'); ?>
											</span>
										</div>
									</div>

									<!-- Usia Kehamilan -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="usia_kehamilan">Usia Kehamilan* (minggu)</label>
											<input type="text" class="form-control" name="usia_kehamilan" placeholder="Usia Kehamilan">
											<span style="color: red">
												<?php echo form_error('usia_kehamilan'); ?>
											</span>
										</div>
									</div>

									<!-- Usia Ibu Hamil -->
									<div class="col-md-6">
										<div class="form-group">
											<label for="usia_ibuhamil">Usia Ibu Hamil* (tahun)</label>
											<input type="text" class="form-control" name="usia_ibuhamil" placeholder="Usia Ibu Hamil">
											<span style="color: red">
												<?php echo form_error('usia_ibuhamil'); ?>
											</span>
										</div>
									</div>

									<!-- Aktifitas Fisik -->
									<div class="col-md-12">
										<div class="form-group">
											<label for="aktifitas_fisik">Aktifitas Fisik*</label>
											<select class="form-control" id="aktifitas_fisik" name="aktifitas_fisik">
												<option value="0">Silahkan Pilih</option>
												<option value="0.2">Ringan</option>
												<option value="0.3">Sedang</option>
												<option value="0.4">Berat</option>
												<option value="0.5">Sangat Berat</option>
											</select>
											<span style="color: red">
												<?php echo form_error('kategori_menu'); ?>
											</span>
										</div>
									</div>

									<div class="col-md-12">
										<button type="submit" name="btn" class="btn btn-success" style="float: right; margin-top: 2%; margin-bottom: 3%;">Hitung</button>
									</div>
								</div>
								<!-- ./rows -->


								<!-- <?php
								if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								echo '<pre>' . var_dump($_POST) . '</pre>';
							}
							?> -->

						</form>
					</div>

					<div class="col-6">
						<h3>Konsultasi kehamilan</h3>
						<p>Untuk melakukan konsultasi kehamilan, silahkan masukkan data anda</p>
						<ol>
							<li>Tinggi Badan - Isi tinggi badan anda saat ini dengan satuan ukuran centimeter.</li>
							<li>Berat Badan - Isi berat badan anda saat ini dengan satuan ukuran kilogram.</li>
							<li>Usia Kehamilan - Isi usia kehamilan saat ini, isi dengan satuan waktu minggu. Rentang waktu antara <strong>1 sampai 40 minggu</strong></li>
							<li>Usia Ibu - Isi sesuai dengan usia anda saat ini.</li>
							<li>Aktifitas Fisik - Pilih aktifitas fisik berdasarkan <a href="#" data-toggle="modal" data-target="#aktifitasModal">kreteria berikut</a></li>
						</ol>
					</div>
				</div>
			</div>

		</div>
		<!-- ./card-body -->
	</div>

	<div class="card-footer small text-muted">
		* required fields
	</div>
	<!-- ./form konsultasi -->
	<hr>

	<!-- form hasil konsultasi -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-info-circle"></i> Informasi Konsultasi
		</div>

		<div class="card-body">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-12">
						<h3><i class="fas fa-angle-double-right"></i> Hasil Konsultasi</h3>
						<?php if (empty($konsultasi)) { ?>
							<ul>
								<li>
									<div class="row">
										<div class="col-md-3">Tinggi Badan</div> :
										<div class="col-md-4"> ..... cm</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Berat Badan</div> :
										<div class="col-md-4"> ..... cm</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Usia Kehamilan</div> :
										<div class="col-md-4"> ..... minggu</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Usia Anda</div> :
										<div class="col-md-4"> ..... tahun</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Status Gizi</div> :
										<div class="col-md-4"> ..... </div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Jumlah Energi yang anda butuhkan</div> :
										<div class="col-md-4"> ..... kalori</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-5">Rincian Gizi</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">1. Karbohidrat</div> :
										<div class="col-md-3"> ..... kalori</div> =
										<div class="col-md-3"> ..... gram</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">2. Protein</div> :
										<div class="col-md-3"> ..... kalori</div> =
										<div class="col-md-3"> ..... gram</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">3. Lemak</div> :
										<div class="col-md-3"> ..... kalori</div> =
										<div class="col-md-3"> ..... gram</div>
									</div>
								</li>
							</ul>
						<?php } else { ?> <!-- jika ada data maka tampilkan -->
							<ul>
								<li>
									<div class="row">
										<div class="col-md-3">Tinggi Badan</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->tinggi_badan; ?></strong> cm</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Berat Badan</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->berat_badan; ?></strong> kg</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Usia Kehamilan</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->usia_kehamilan; ?></strong> minggu</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Usia Anda</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->usia_ibuhamil; ?></strong> tahun</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Status Gizi</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->status_gizi; ?></strong> </div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-3">Jumlah Energi yang anda butuhkan</div> :
										<div class="col-md-4"> <strong><?php echo $konsultasi->tee; ?></strong> kalori</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-md-5">Rincian Gizi</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">1. Karbohidrat</div> :
										<div class="col-md-3"><strong><?php echo $konsultasi->energi_karbohidrat; ?></strong> kalori</div> =
										<div class="col-md-3"> <strong><?php echo $konsultasi->kebutuhan_karbohidrat; ?></strong> gram</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">2. Protein</div> :
										<div class="col-md-3"> <strong><?php echo $konsultasi->energi_protein; ?></strong> kalori</div> =
										<div class="col-md-3"> <strong><?php echo $konsultasi->kebutuhan_protein; ?></strong> gram</div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-3">3. Lemak</div> :
										<div class="col-md-3"> <strong><?php echo $konsultasi->energi_lemak; ?></strong> kalori</div> =
										<div class="col-md-3"> <strong><?php echo $konsultasi->kebutuhan_lemak; ?></strong> gram</div>
									</div>
								</li>
							</ul>
						<?php } ?>
					</div>
					<!-- ./col-md-12 -->
				</div>
				<!-- ./col-row -->
				<hr>

				<h3><i class="fas fa-angle-double-right"></i> Saran Menu Makan</h3>
				<table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama Menu</td>
							<td>Kategori</td>
							<td>Energi</td>
							<td>Karbohidrat</td>
							<td>Protein</td>
							<td>Lemak</td>
						</tr>
					</thead>
					<tbody>
						<?php if (!empty($details)): ?>
							<?php $no=1; ?>
							<?php foreach ($details as $detail): ?>
								<?php
									if ($detail->kategori_menu == "1")
									$showKat = "Buah";
									elseif ($detail->kategori_menu == "2")
									$showKat = "Daging";
									elseif ($detail->kategori_menu == "3")
									$showKat = "Ikan";
									elseif ($detail->kategori_menu == "4")
									$showKat = "Sayuran";
									elseif ($detail->kategori_menu == "5")
									$showKat = "Serelia/Umbi";
									else
									$showKat = '';								 
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $detail->nama_menu; ?></td>
									<td><?php echo $showKat; ?></td>
									<td><?php echo $detail->energi_menu; ?> kalori</td>
									<td><?php echo $detail->karbohidrat_menu; ?> gram</td>
									<td><?php echo $detail->protein_menu; ?> gram</td>
									<td><?php echo $detail->lemak_menu; ?> gram</td>
								</tr>
							<?php $no++; endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
			<!-- ./col-lg-12 -->
		</div>
		<!-- ./card-body -->
	</div>

	<div class="card-footer small text-muted">
		Footer
	</div>
	<!-- ./form hasil konsultasi -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Sticky Footer -->
<!-- <footer class="sticky-footer">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright ©
<?php echo SITE_NAME ." ". Date('Y') ?>
</span>
</div>
</div>
</footer> -->

<!-- Footer -->
<footer class="page-footer" style="background-color: #E3E3E3; ">
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">
		<span>Copyright ©
			<?php echo SITE_NAME ." ". Date('Y') ?>
		</span>
	</div>
	<!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- container -->

<?php $this->load->view("ibuhamil/_partials/scrolltop.php") ?>
<?php $this->load->view("ibuhamil/_partials/modal.php") ?>
<?php $this->load->view("ibuhamil/_partials/js.php") ?>

</body>

</html>
