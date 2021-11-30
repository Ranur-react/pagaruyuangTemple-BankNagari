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
											<th>Tarif</th>
											<th>Jumlah Kendaraan</th>
											<th>Jumlah Transaksi</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$n = 0;
										$totalkendaran = 0;
										$totaltrx = 0;
										foreach ($exitGroubDay as $data) {
											$n++;
											$totalkendaran += $data['jumlah_kendaraan'];
											$totaltrx += $data['jumlah_transakasi'];
										?>
											<tr>
												<td><?= $data['jenis_kendaraan']; ?></td>
												<td><?=  'Rp. ' . rupiah($data['harga_bayar']); ?></td>
												<td><?= $data['jumlah_kendaraan']; ?></td>
												<td><?= 'Rp. ' . rupiah($data['jumlah_transakasi']); ?></td>
											</tr>
										<?php
										}
										?>

									</tbody>
									<tfoot>
										<tr>
											<th colspan="2">Total</th>
											<th><?= $totalkendaran; ?></th>
											<th><?= 'Rp. '.rupiah($totaltrx); ?></th>
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
				<h3 class="box-title"><i class="fa fa-letter"></i> <?= $small ?></h3>
				<?= $this->session->flashdata('pesan'); ?>
			</div>
			<div class="box-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-warning">
							<div class="box-header with-border">
								<button class="btn bg-olive cetakinikeluar"><i class="icon-printer"></i> Cetak</button>
							</div>
							<table class="table table-bordered table-striped data-tabel">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th>Nomor Plat</th>
										<th>Nomor Tiket</th>
										<th>Jenis Kendaraan</th>
										<th>Harga Bayar</th>
										<th>Jam Masuk</th>
										<th>Metode Bayar</th>
										<th>Keterangan</th>
										<!-- <th class="text-center">Aksi</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									$n = 0;
									foreach ($exitoneday as $data) {
										$n++;
									?>

										<tr>
											<td><?= $n; ?> .</td>
											<td><?= $data['noplat']; ?></td>
											<td><?= $data['id_Entry']; ?></td>
											<td><?= $data['jenis_kendaraan']; ?></td>
											<td><?=  'Rp. ' . rupiah($data['harga_bayar']); ?></td>
											<td><?= $data['date_exit']; ?></td>
											<td><?= $data['jenis_bayar']; ?></td>
											<td><?= $data['keterangan']; ?></td>
											<!-- <td><?= $data['keterangan']; ?></td> -->
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
</div>
