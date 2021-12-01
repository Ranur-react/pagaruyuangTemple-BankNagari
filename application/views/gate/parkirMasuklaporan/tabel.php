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
			foreach ($MasukGroup as $data) {
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
