<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row">
	<div class="col-md-12 grid-margin">
		<div class="row">
			<div class="col-12 col-xl-8 mb-4 mb-xl-0">
				<h3 class="font-weight-bold">Selamat Datang <?= $this->session->userdata('usr_nama'); ?></h3>
				<h6 class="font-weight-normal mb-0">Sistem Web Profile<span class="text-primary">- PT. Kunango Jantan Group</span></h6>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card tale-bg">
			<div class="card-people mt-auto">
				<img src="<?= site_url() ?>assets/assets_dash/images/dashboard.png" alt="people">
				<div class="weather-info">
					<div class="d-flex">
						<div>
							<h3 class="mb-0 font-weight-normal"><i class="icon-head mr-1"></i></h3>
						</div>
						<div class="ml-2">
							<h4 class="location font-weight-normal"><a href="<?= site_url('jadwal'); ?>">Jadwal</a></h4>
							<h6 class="font-weight-normal"><?= $this->session->userdata('usr_username'); ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="col-md-6 grid-margin transparent">
		<div class="row">
			<div class="col-md-6 mb-4 stretch-card transparent">
				<div class="card card-tale">
					<div class="card-body">
						<p class="mb-4">Total User</p>
						<p class="fs-30 mb-2"><?= $user; ?></p>
						<p>User</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4 stretch-card transparent">
				<div class="card card-light-danger">
					<div class="card-body">
						<p class="mb-4">Total Unit</p>
						<p class="fs-30 mb-2"><?= $unit; ?></p>
						<p>Unit Kerja</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>