<style type="text/css">
	.form-control {
		border-radius: 20px;
		text-align: center;
	}

	.mini-Info {
		font-size: 10px;
		letter-spacing: 1px;
		color: grey;
	}

	.medium-Info {
		font-size: 14px;
		letter-spacing: 1px;
		color: red;
	}

	.btn {
		border-radius: 10px;
	}

	.btn-sumbit {
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		/*padding-bottom: 5px;*/
		/*padding-top: 5px;*/
	}

	.btn-icon {
		/*background-color: yellowx	;*/
		width: 40%;
		height: 100%;
		display: flex;
		flex-direction: row;
		margin-left: 10px;
		padding-top: -10px;
	}

	.btn-lable {
		/*background-color: grey;*/
		width: 40%;
		height: 100%;
		text-align: right;

	}

	.tombolIcon {
		margin-left: 20px;
		width: auto;
		height: 100%;
		margin-right: 10%;
	}

	.bayar-btn {
		padding-left: 20px;
	}

	.box-bayar {
		display: flex;
		flex-direction: column;
	}

	.logoBayar {
		widows: 50%;
		height: auto;
	}
</style>

<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-letter"></i> <?= $page ?></h3>
				<?= $this->session->flashdata('pesan'); ?>

			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-danger">
							<div class="box-header with-border">
								<!-- <button class="btn bg-olive cetakini"><i class="icon-printer"></i> Cetak</button> -->
							</div>
							<div class="box-body table-responsive">
								<?= $this->session->flashdata('pesan'); ?>
								<table class="table table-bordered table-striped data-tabel">
									<thead>
										<tr>
											<th>Jenis Kendaraan</th>
											<th>Jumlah Kendaraan</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$n = 0;
										$totalkendaran = 0;
										$totaltrx = 0;
										foreach ($EntryGroubDay as $data) {
											$n++;
											$totalkendaran += $data['jumlah_kendaraan'];
										?>
											<tr>
												<td><?= $data['jenis']; ?></td>
												<td><?= $data['jumlah_kendaraan']; ?></td>
											</tr>
										<?php
										}
										?>

									</tbody>
									<tfoot>
										<tr>
											<th colspan="1">Total</th>
											<th><?= $totalkendaran; ?></th>
											<th></th>

										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-letter"></i> <?= $pageSecond ?></h3>
				<?= $this->session->flashdata('pesan'); ?>

			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-danger">
							<div class="box-header with-border">
								<!-- <button class="btn bg-olive cetakini"><i class="icon-printer"></i> Cetak</button> -->
							</div>
							<div class="box-body table-responsive">
								<?= $this->session->flashdata('pesan'); ?>
								<table class="table table-bordered table-striped data-tabel">
									<thead>
										<tr>
											<th>Jenis Kendaraan</th>
											<th>Jumlah Kendaraan</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$n = 0;
										$totalkendaran = 0;
										$totaltrx = 0;
										foreach ($EntryGroubDaySisa as $data) {
											$n++;
											$totalkendaran += $data['jumlah_kendaraan'];
										?>
											<tr>
												<td><?= $data['jenis']; ?></td>
												<td><?= $data['jumlah_kendaraan']; ?></td>
											</tr>
										<?php
										}
										?>

									</tbody>
									<tfoot>
										<tr>
											<th colspan="1">Total</th>
											<th><?= $totalkendaran; ?></th>
											<th></th>

										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title"><i class="fa fa-letter"></i> <?= $secontitle ?></h3>
				<?= $this->session->flashdata('pesan'); ?>
				<div class="row">
					<div class="col-xs-8"></div>
					<div class="col-xs-2">
						<div class="form-group">
							<label>Tanggal Awal</label>
							<div class="input-group date">

								<input type="text" onchange="IsiTabel()" class="form-control pull-right datepicker35" value="<?= date('m/d/Y') ?>" id="datepicker35">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<!-- /.input group -->
						</div>
					</div>
					<div class="col-xs-2">
						<div class="form-group">
							<label>Date Akhir</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" onchange="IsiTabel()" class="form-control pull-right datepicker36" value="<?= date('m/d/Y') ?>" id="datepicker36">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->
					</div>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-warning">
							<div class="box-header with-border">
								<!-- <button class="btn bg-olive cetakinikeluar"><i class="icon-printer"></i> Cetak</button> -->
							</div>
							<div class="isiTabel">
								<table class="table table-bordered table-striped data-tabel">
									<thead>
										<tr>
											<th>Jenis Kendaraan</th>
											<th>Jumlah Kendaraan</th>
										</tr>
									</thead>
								</table>
							</div>



						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
</div>
<script>
	$(function() {
		$('.data-tabel23').DataTable({
			'ordering': false,
		});

		//Date picker
		$('#datepicker35').datepicker({
			autoclose: true
		})
		$('#datepicker36').datepicker({
			autoclose: true
		})
	})
	IsiTabel();

	function IsiTabel() {
		$.ajax({
			type: "post",
			url: "<?= site_url('laporan/ParkirMasuk/TabelPeriode') ?>",
			data: "&awal=" + $('.datepicker35').val() + "&akhir=" + $('.datepicker36').val(),
			cache: false,
			success: function(data) {
				$('.isiTabel').html(data);

			}
		});
	}
</script>
