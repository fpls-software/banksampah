<div class="container">
	<div class="print">
		<div class="print-header">
			<hr/>
				<a href="<?php echo base_url(); ?>index.php/laporan/jualbeli"><button type="button" class="btn btn-success btn-sm"><span class="fa fa-chevron-left"></span> Kembali</button></a>
				<button type="button" class="btn btn-info btn-sm" onclick="printDiv('printMe')"><span class="fa fa-print"></span> Print</button>
			<hr/>
		</div>
		<div class="print-body" id="printMe">
			<div class="text-center">
				<b>
					<h2>BANK SAMPAH</h2> 
				</b>
				<p>Kel.Jennae Kec.Liliriaja Kab.Soppeng</p>
				<hr style="border: 2px solid;"/>
				<h4>Laporan Jual Beli Sampah</h4>
				<p>Tanggal <?php echo $dari; ?> - <?php echo $sampai; ?></p>
			</div>
			<table class="table table-bordered table-stripped">
				<thead class="text-center">
					<th>No</th>
					<th>Tanggal</th>
					<th>Jenis Transaksi</th>
					<th>Nama Sampah</th>
					<th>Harga</th>
					<th>Satuan</th>
					<th>Kuantitas</th>
					<th>Jumlah</th>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						foreach($laporan as $data) {
					?>
					<tr>
						<td class="text-center"><?php echo $no++; ?></td>
						<td><?php echo $data['tgl_transaksi']; ?></td>
						<?php 
							$jenis = $data['jenis'];
							$jenis = str_ireplace('pembeli', 'pembelian', $jenis);
							$jenis = str_ireplace('penjual', 'penjualan', $jenis);
						?>
						<td><?php echo $jenis; ?></td>
						<td><?php echo $data['nm_sampah']; ?></td>
						<td><?php echo "Rp".number_format($data['harga'],0,',','.'); ?></td>
						<td><?php echo $data['satuan']; ?></td>
						<td><?php echo $data['jml']; ?></td>
						<td><?php echo "Rp".number_format($data['harga'] * $data['jml'],0,',','.'); ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
</script>