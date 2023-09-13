<?php foreach($datatransaksi as $data) {} ?>
<body>
	<div class="container">
		<form action="<?php echo base_url(); ?>index.php/transaksi/simpannota" method="post" >
			<div class="print" style="width: 400px !important;">
				<div class="print-header">
					<hr/>
					<a href="<?php echo base_url(); ?>index.php/dashboard" onclick="return confirm('Pastikan untuk menyimpan atau mencetak Bukti Pembayaran Terlebih Dahulu. Apakah anda ingin Kembali kehalaman utama?');"><button type="button" class="btn btn-success btn-sm"><span class="fa fa-chevron-left"></span> Kembali</button></a>
					<button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan Nota</button>
					<button type="button" class="btn btn-info btn-sm" onclick="printDiv('printMe')"><span class="fa fa-print"></span> Print</button>
					<input type="hidden" name="no_nota" value="<?php echo $data['id_transaksi']; ?>">
					<input type="hidden" name="tgl_transaksi" value="<?php echo $data['tgl_transaksi']; ?>">
					<input type="hidden" name="jml" value="<?php echo $data['jml']; ?>">
					<input type="hidden" name="nm_sampah" value="<?php echo $data['nm_sampah']; ?>">
					<input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
					<input type="hidden" name="total" value="<?php echo $data['jml'] * $data['harga']; ?>">
					<hr/>
					<div id='printMe'>
					<h3 class="print-title text-center">Nota</h3>
					<table border="0">
						<tr>
							<td>No Nota<td>
							<td>:</td>
							<td><?php echo $data['id_transaksi']; ?></td>
						</tr>
						<tr>
							<td>Tanggal<td>
							<td>:</td>
							<td><?php echo $data['tgl_transaksi']; ?></td>
						</tr>
					</table>
					<table class="table table-bordered">
						<thead>
							<th>Banyaknya</th>
							<th>Barang</th>
							<th>Harga</th>
							<th>Jumlah</th>
						</thead>
						<tbody>
							<tr>
								<?php $total = $data['jml'] * $data['harga']; ?>
								<td><?php echo $data['jml']; ?> <?php echo $data['satuan']; ?></td>
								<td><?php echo $data['nm_sampah']; ?></td>
								<td><?php echo "Rp".number_format($data['harga'],0,',','.'); ?></td>
								<td><?php echo "Rp".number_format($total,0,',','.'); ?></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
						<tfoot>
							<th colspan="3" class="text-center">Total</th>
							<th><?php echo "Rp".number_format($total,0,',','.'); ?></th>
						</tfoot>
					</table>
					<table border="0" width="100%">
						<tr class="text-center">
							<td>Tanda Terima</td>
							<td>Hormat Kami,</td>
						</tr>
						<tr height="60">
						
						</tr>
						<tr class="text-center">
							<td><strong>...........................</strong></td>
							<td><strong>...........................</strong></td>
						</tr>
					</table>
					</div>
				</div>	
			</div>
		</form>
		
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