
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/sampah/data">Data Sampah</a></li>
              <li class="breadcrumb-item active">Edit Data Sampah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Tambah Data Sampah</h5>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url();?>index.php/sampah/simpan" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Kode Sampah</label>
										<input type="text" name="kd_sampah" class="form-control">
									</div>
									<div class="form-group">
										<label>Nama Sampah</label>
										<input type="text" name="nm_sampah" class="form-control">
									</div>
									<div class="form-group">
										<label>Satuan</label>
										<input type="text" name="satuan" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Harga Beli</label>
										<input type="text" name="harga_beli" class="form-control">
									</div>
									<div class="form-group">
										<label>Harga Jual</label>
										<input type="text" name="harga_jual" class="form-control">
									</div>
									<div class="form-group">
										<label>Jenis Sampah</label>
										<select class="form-control" name="jns_sampah">
											
											<option>Organik</option>
											<option>Non-Organik</option>
										</select>
									</div>
								</div>
							</div>
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>