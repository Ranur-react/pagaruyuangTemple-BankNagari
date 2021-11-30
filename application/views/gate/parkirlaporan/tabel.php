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
			foreach ($exitGroup as $data) {
				$n++;
				$totalkendaran += $data['jumlah_kendaraan'];
				$totaltrx += $data['jumlah_transakasi'];
			?>
				<tr>
					<td><?= $data['jenis_kendaraan']; ?></td>
					<td><?= 'Rp. ' . rupiah($data['harga_bayar']); ?></td>
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
				<th><?= 'Rp. ' . rupiah($totaltrx); ?></th>
				<th></th>

			</tr>
		</tfoot>
	</table>
