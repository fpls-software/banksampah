<!-- Content Wrapper. Contains page content -->
<?php 
	foreach($datatransaksi as $data1) {} 
	foreach($pembelian as $data2) {}
	foreach($jmlpembelian as $data3) {}
	foreach($penjualan as $data4) {}
	foreach($jmlpenjualan as $data5) {}
	foreach($datauser as $user)

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
		<?php 
			if($user['level'] == 'pimpinan') {
		?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pembelian</span>
                <span class="info-box-number">
                  <?php echo $data2['pembelian']; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penjualan</span>
                <span class="info-box-number"><?php echo $data4['penjualan']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-bill"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Pembelian</span>
                <span class="info-box-number"><?php echo "Rp".number_format($data3['jmlpembelian'],0,',','.'); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-bill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Penjualan</span>
                <span class="info-box-number"><?php echo "Rp.".number_format($data5['jmlpenjualan'], 0, ',', '.'); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
		<?php } ?>
		<?php 
			if($user['level'] == 'admin') {
		?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pembelian</span>
                <span class="info-box-number">
                  <?php echo $data2['pembelian']; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penjualan</span>
                <span class="info-box-number"><?php echo $data4['penjualan']; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-money-bill"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Pembelian</span>
                <span class="info-box-number"><?php echo "Rp".number_format($data3['jmlpembelian'],0,',','.'); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-bill"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Penjualan</span>
                <span class="info-box-number"><?php echo "Rp.".number_format($data5['jmlpenjualan'], 0, ',', '.'); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
		<?php } ?>
        <!-- /.row -->
		<?php
			if($user['level']=='admin' OR $user['level']=='masyarakat') {
		?>
		<div class="row">
		
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Transaksi</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<form action="<?php echo base_url(); ?>index.php/transaksi/pembelian" method="post">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pembelian</h5>
								</div>
								<div class="card-body">
										<?php $no = $data1['id_transaksi'] + 1; ?>
										<input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $no; ?>" readonly>
										<label>Tanggal Transaksi</label>
										<input type="text" name="tgl_transaksi" class="form-control" value="<?php echo DATE('Y-m-d'); ?>" readonly>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Nama Sampah</label>
												<select name="kd_sampah" class="form-control" id="sampah" onchange="cek_db()" required>
													<option selected readonly>--PILIH SAMPAH--</option>
													<?php foreach($datasampah as $data) { ?>
														<option value="<?php echo $data['kd_sampah']; ?>"><?php echo $data['nm_sampah']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Harga</label>
												<div class="row">
													<div class="col-sm-6">
														<input type="text" name="harga_beli" class="form-control" id="harga_beli" value="" readonly>
													</div>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="satuan" value="" readonly>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Jumlah Beli</label>
												<input type="text" name="jml" id="jml" class="form-control" required onChange="jmlHarga()">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Total Harga</label>
												<input type="text" id="ttl_harga" class="form-control" readonly>
											</div>
										</div>
									</div>
								
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan Transaksi</button>
								</div>
							</div>
						</form>
					</div>
					<?php 
					 	if($user['level']== 'admin') {
					 ?>
					<div class="col-lg-6">
						<form action="<?php echo base_url(); ?>index.php/transaksi/penjualan" method="post">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Penjualan</h5>
								</div>
								<div class="card-body">
										<?php $no = $data1['id_transaksi'] + 1; ?>
										<input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $no; ?>" readonly>
										<label>Tanggal Transaksi</label>
										<input type="text" name="tgl_transaksi" class="form-control" value="<?php echo DATE('Y-m-d'); ?>" readonly>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Nama Sampah</label>
												<select name="kd_sampah" class="form-control" id="sampah1" onchange="cek_db1()" required>
													<option selected readonly>--PILIH SAMPAH--</option>
													<?php foreach($datasampah as $data) { ?>
														<option value="<?php echo $data['kd_sampah']; ?>"><?php echo $data['nm_sampah']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Harga</label>
												<div class="row">
													<div class="col-sm-6">
														<input type="text" name="harga_jual" class="form-control" id="harga_jual" value="" readonly>
													</div>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="satuan1" value="" readonly>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>Jumlah Jual</label>
												<input type="text" name="jml" id="jml1" class="form-control" required onChange="jmlHargaJual()">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
												<label>Pembeli</label>
												<select name="id_client" class="form-control" id="sampah1" onchange="cek_db1()" required>
													<option selected readonly>--PILIH PEMBELI--</option>
													<?php foreach($dataclient as $data1) { ?>
														<option value="<?php echo $data1['id_client']; ?>"><?php echo $data1['nama']; ?></option>
													<?php } ?>
												</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Total Harga</label>
												<input type="text" id="ttl_hargajual" class="form-control" readonly>
											</div>
										</div>
									</div>
								
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-save"></span> Simpan Transaksi</button>
								</div>
							</div>
						</form>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php } ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
function cek_db(){
        var sampah = $("#sampah").val(); 
        $.ajax({
          url : "<?php echo base_url('index.php/dashboard/getsampah'); ?>", // file proses penginputan
          data : 'kd_sampah='+sampah,
        }).success(function (data){
          var json = data,
          obj = JSON.parse(json);
          $('#harga_beli').val(obj.harga_beli); 
          $('#satuan').val("/ "+obj.satuan); 
        })
		
      }
	  function cek_db1(){
        var sampah1 = $("#sampah1").val(); 
        $.ajax({
          url : "<?php echo base_url('index.php/dashboard/getsampah1'); ?>", // file proses penginputan
          data : 'kd_sampah='+sampah1,
        }).success(function (data){
          var json = data,
          obj = JSON.parse(json);
          $('#harga_jual').val(obj.harga_jual); 
          $('#satuan1').val("/ "+obj.satuan); 
        })
		
      }
	  function jmlHarga() {
		var ttl_harga = document.getElementById('ttl_harga');
		var harga = document.getElementById('harga_beli').value;
		var jml = document.getElementById('jml').value;
		var jmlharga = harga * jml;
		ttl_harga.value = jmlharga;
	  }
	
	  function jmlHargaJual() {
		var ttl_harga = document.getElementById('ttl_hargajual');
		var harga = document.getElementById('harga_jual').value;
		var jml1 = document.getElementById('jml1').value;
		var jmlharga = harga * jml1;
		ttl_harga.value = jmlharga;
	  }
</script>
